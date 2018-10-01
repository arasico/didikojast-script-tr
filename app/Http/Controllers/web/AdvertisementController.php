<?php

namespace App\Http\Controllers\web;

use App\Advertisement;
use App\AdvertisementGallery;
use App\Category;
use App\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['advertisementInfo'] = Advertisement::with('gallery');
        if ($request->input('type') != null)
            if ($request->input('type') == "lost")
                $data['advertisementInfo'] = $data['advertisementInfo']->where('type', 'lost');
            elseif ($request->input('type') == "found")
                $data['advertisementInfo'] = $data['advertisementInfo']->where('type', 'found');
        if ($request->input('state') != null)
            $data['advertisementInfo'] = $data['advertisementInfo']->where('state', $request->input('state'));
        if ($request->input('key') != null)
            $data['advertisementInfo'] = $data['advertisementInfo']->where('title', 'like', '%' . $request->input('key') . '%');
        $data['advertisementInfo'] = $data['advertisementInfo']->where(['type_row' => 1])->orderBy('created_at', 'DESC')->paginate(10);
        $data['request'] = $request->all();
        $data['stateInfo'] = State::where(['type_row' => 1])->get();
        return view('web.search', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categoryInfo'] = Category::where(['type_row' => 1])->get();
        $data['stateInfo'] = State::where(['type_row' => 1])->get();
        return view('web.addAds', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $url = str_replace(' ', '-', $request->title);
        while (Advertisement::where('url', $url)->count()) {
            $url .= '-';
        }
        $info = array();
        $publish_at_array = \Morilog\Jalali\jDateTime::toGregorian($request->year, $request->month, $request->day);
        $publish_at = strtotime($publish_at_array[0] . '-' . $publish_at_array[1] . '-' . $publish_at_array[2]);
        $advertisement = Advertisement::create(['user_id' => \Auth::user()->id, 'type' => $request->type, 'name' => \Auth::user()->name, 'phone' => \Auth::user()->phone, 'tell' => '', 'email' => \Auth::user()->email, 'address' => $request->address, 'title' => $request->title, 'url' => $url, 'description' => $request->description, 'category_id' => intval($request->category_id), 'state' => $request->state, 'city' => '', 'publish_at' => $publish_at, 'expire_at' => 0, 'info' => $info, 'updated_at' => strtotime(date('Y-m-d H:i:s')), 'created_at' => strtotime(date('Y-m-d H:i:s')), 'type_row' => 1]);
        foreach ($request->files as $file)
            foreach ($file as $key => $value) {
                $image = null;
                if (isset($value)) {
                    $image = $advertisement->id . time() . md5(pathinfo($value->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $value->getClientOriginalExtension();
                    \Storage::disk('upload')->makeDirectory('/advertisement/' . $advertisement->id . '/');
                    $exists = \Storage::disk('upload')->has('/advertisement/' . $advertisement->id . '/' . $image);
                    if ($exists == null)
                        \Storage::disk('upload')->put('/advertisement/' . $advertisement->id . '/' . $image, \File::get($value->getRealPath()));
                    AdvertisementGallery::create(['advertisement_id' => $advertisement->id, 'image' => $image, 'created_at' => strtotime(date('Y-m-d H:i:s'))]);
                }
            }
        return redirect('advertisement')->with('success', 'کاربر گرامی ، اطلاعات با موفقیت ثبت شد.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $url)
    {
        $data['advertisementInfo'] = Advertisement::with('galleries')->where('url', $url)->first();
        if (count($data['advertisementInfo']) == 0)
            return redirect('search');
        return view('web.search-view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['editValue'] = Advertisement::where('id', $id)->first();
        if (count($data['editValue']) == 0)
            return redirect('profile/my-post');
        $data['categoryInfo'] = Category::where(['type_row' => 1])->get();
        $data['stateInfo'] = State::where(['type_row' => 1])->get();
        $data['galleryInfo'] = AdvertisementGallery::where(['advertisement_id' => $id])->get();
        $data['editValue']->year = \jDate::forge($data['editValue']->publish_at)->format('%Y');
        $data['editValue']->month = \jDate::forge($data['editValue']->publish_at)->format('%B');
        $data['editValue']->day = \jDate::forge($data['editValue']->publish_at)->format('%d');
        return view('web.addAds', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $url = str_replace(' ', '-', $request->title);
        while (Advertisement::where('url', $url)->where('id', '!=', $id)->count()) {
            $url .= '-';
        }
        $publish_at_array = \Morilog\Jalali\jDateTime::toGregorian($request->year, $request->month, $request->day);
        $publish_at = strtotime($publish_at_array[0] . '-' . $publish_at_array[1] . '-' . $publish_at_array[2]);
        Advertisement::where('id', $id)->update(['type' => $request->type, 'name' => $request->name, 'phone' => $request->phone, 'tell' => $request->tell, 'email' => $request->email, 'address' => $request->address, 'title' => $request->title, 'url' => $url, 'description' => $request->description, 'category_id' => intval($request->category_id), 'state' => $request->state, 'city' => '', 'publish_at' => $publish_at, 'expire_at' => 0, 'updated_at' => strtotime(date('Y-m-d H:i:s')), 'created_at' => strtotime(date('Y-m-d H:i:s')), 'type_row' => 1]);
        foreach ($request->files as $file)
            foreach ($file as $key => $value) {
                $image = null;
                if (isset($value)) {
                    $image = $id . time() . md5(pathinfo($value->getClientOriginalName(), PATHINFO_FILENAME)) . '.' . $value->getClientOriginalExtension();
                    \Storage::disk('upload')->makeDirectory('/advertisement/' . $id . '/');
                    $exists = \Storage::disk('upload')->has('/advertisement/' . $id . '/' . $image);
                    if ($exists == null)
                        \Storage::disk('upload')->put('/advertisement/' . $id . '/' . $image, \File::get($value->getRealPath()));
                    AdvertisementGallery::create(['advertisement_id' => $id, 'image' => $image, 'created_at' => strtotime(date('Y-m-d H:i:s'))]);
                }
            }
        return redirect('profile/my-post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Advertisement::where('id', $id)->update(['type_row' => -1]);
        return redirect('profile/my-post');
    }

    ////////////////////////function/////////////////////////////////////////////
    ///
    public function deleteGallery(Request $request)
    {
        $info = AdvertisementGallery::where(['id' => $request->id, 'advertisement_id' => $request->advertisement_id])->first();
        if (count($info) == 0)
            return 'false';
        $exists = \Storage::disk('upload')->has('/advertisement/' . $request->advertisement_id . '/' . $info->image);
        if ($exists != null)
            @\Storage::disk('upload')->delete('/advertisement/' . $request->advertisement_id . '/' . $info->image);
        $info->delete();
        return 'true';
    }
}
