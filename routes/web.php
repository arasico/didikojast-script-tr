<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Start test Route
//Dashboard

//Taed agahi

Route::get('/dashboard/activeAds', function () {
    return view('admin.activeAds.index');
});


Route::get('/test', function () {
    return view('web.test');
});

Route::get('/forgetPassword', function () {
    return view('web.auth.forgetPassword');
});


//End test Route

//login
Route::middleware('auth.login.check')->get('/login', function () {
    return view('web.auth.index', ['status' => 'login']);
});
Route::middleware('auth.login.check')->get('/register', function () {
    return view('web.auth.index', ['status' => 'register']);
});

Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/register', 'Auth\RegisterController@register');
Route::post('/forgetPassword', 'Auth\ForgotPasswordController@forgetPassword');
Route::get('/user/activation/{rememberToken}', 'Auth\LoginController@activation');
Route::get('/user/forgetPassword/{rememberToken}', 'Auth\ForgotPasswordController@changePassword');
Route::post('/changeForgetPassword', 'Auth\ForgotPasswordController@changeForgetPassword');


//Before Login User Type
Route::namespace('\web')->group(function () {

    //Index
    Route::get('/', 'WelcomeController@index');

    Route::middleware('auth.login.check.user')->group(function () {

        //Add Advertisement
        Route::get('/advertisement', 'AdvertisementController@create');
        Route::post('/advertisement', 'AdvertisementController@store');
        Route::patch('/advertisement/{id}', 'AdvertisementController@update');

        //Profile
        Route::get('/profile', 'ProfileController@edit');
        Route::get('/profile/my-post', 'ProfileController@index');
        Route::get('/profile/my-post/{id}', 'AdvertisementController@edit');
        Route::post('/profile/my-post/delete-gallery', 'AdvertisementController@deleteGallery');
        Route::delete('/profile/my-post/{id}', 'AdvertisementController@destroy');
        Route::patch('/profile/{id}', 'ProfileController@update');
        Route::post('/profile', 'ProfileController@store');

    });

    //Search view Advertisement
    Route::get('/search', 'AdvertisementController@index');
    Route::get('/advertisement/{url}', 'AdvertisementController@show');


});

//After Login admin Type
Route::middleware('admin')->namespace('\admin')->prefix('/dashboard')->group(function () {


    //Dashboard
    Route::get('/', function () {
        return view('admin.index');
    });

    //Category
    Route::resource('category', 'CategoryController', ['only' => ['index', 'store', 'edit', 'update', 'destroy']]);

    //Advertisement
    Route::post('advertisement/delete-gallery', 'AdvertisementController@deleteGallery');
    Route::resource('advertisement', 'AdvertisementController', ['only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']]);

});
