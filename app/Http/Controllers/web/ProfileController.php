<?php

namespace App\Http\Controllers\web;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Advertisement;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['advertisementInfo'] = Advertisement::with('gallery')->where(['type_row' => 1, 'user_id' => \Auth::user()->id])->paginate(10);
        return view('web.myPost', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $url)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data['editValue'] = User::where('id', \Auth::user()->id)->first();
        return view('web.myProfile', $data);
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
        $data['editValue'] = User::where('id', \Auth::user()->id)->first();
        if (strlen($request->phone) != 11)
            return view('web.myProfile', $data)->withErrors(['کاربر گرامی ،تلفن همراه اشتباه می باشد.']);
        if (User::where('phone', $request->phone)->where('id', '!=', \Auth::user()->id)->first())
            return view('web.myProfile', $data)->withErrors(['کاربر گرامی ،تلفن همراه تکراری می باشد.']);
        if (User::where('email', $request->email)->where('id', '!=', \Auth::user()->id)->first())
            return view('web.myProfile', $data)->withErrors(['کاربر گرامی ،پست الکترونیک تکراری می باشد.']);
        if ($request->oldPassword && $request->newPassword && $request->newPassword2) {
            if (!\Hash::check($request->oldPassword, \Auth::User()->password))
                return view('web.myProfile', $data)->withErrors(['کاربر گرامی، کلمه عبور شما صحیح نمی باشد.']);
            if ($request->newPassword != $request->newPassword2)
                return view('web.myProfile', $data)->withErrors(['کاربر گرامی، کلمه عبور شمایکسان نمی باشد.']);
            User::where('id', \Auth::user()->id)->update(['password' => bcrypt($request->newPassword), 'updated_at' => strtotime(date('Y-m-d H:i:s'))]);
        }
        User::where('id', \Auth::user()->id)->update(['phone' => $request->phone, 'email' => $request->email, 'name' => $request->name, 'updated_at' => strtotime(date('Y-m-d H:i:s'))]);
        return redirect('profile')->with('success', 'کاربر گرامی ، اطلاعات با موفقیت ثبت شد.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        //
    }

    ////////////////////////function/////////////////////////////////////////////
    public function deleteGallery(Request $request)
    {
        //
    }
}
