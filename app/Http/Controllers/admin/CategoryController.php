<?php

namespace App\Http\Controllers\admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categoryInfo'] = Category::all();
        return view('admin.category.index', $data);
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
        if ($request->title == null)
            return redirect('dashboard/category')->withInput()->withErrors(['کاربر گرامی ، وارد کردن عنوان اجباری می باشد.']);
        $url = str_replace(' ', '-', $request->title);
        while (Category::where('url', $url)->count()) {
            $url .= '-';
        }
        Category::create(['url' => $url, 'title' => $request->title, 'images' => '', 'description' => '', 'updated_at' => strtotime(date('Y-m-d H:i:s')), 'created_at' => strtotime(date('Y-m-d H:i:s')), 'type_row' => 1]);
        return redirect('dashboard/category')->with('success', 'کاربر گرامی ، اطلاعات با موفقیت ثبت شد.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['editValue'] = Category::where('id', $id)->first();
        if (count($data['editValue']) == 0)
            return redirect('dashboard/category');
        $data['categoryInfo'] = Category::all();
        return view('admin.category.index', $data);
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
        $data['categoryInfo'] = Category::all();
        $data['editValue'] = Category::where('id', $id)->first();
        if (count($data['editValue']) == 0)
            return redirect('dashboard/category');
        $data['categoryInfo'] = Category::all();
        if ($request->title == null)
            return view('admin.category.index', $data)->withErrors(['کاربر گرامی ، وارد کردن عنوان اجباری می باشد.']);
        $url = str_replace(' ', '-', $request->title);
        while (Category::where('url', $url)->where('id', '!=', $id)->count()) {
            $url .= '-';
        }
        Category::where('id', $id)->update(['title' => $request->title, 'url' => $url, 'type_row' => 1, 'updated_at' => strtotime(date('Y-m-d H:i:s'))]);
        return redirect('dashboard/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Category::where('id', $id)->update(['type_row' => -1]);
        return redirect('dashboard/category');
    }
}
