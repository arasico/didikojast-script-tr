<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function forgetPassword(Request $request)
    {
        if (!User::where('email', $request->email)->count())
            return view('web.auth.index', ['status' => 'forgetPassword'])->withErrors(['کاربر گرامی ،پست الکترونیک تکراری می باشد.']);
        $remember_token = sha1($request->email . time());
        $link = url('user/forgetPassword/' . $remember_token);
        $user = User::where('email', $request->email)->first();
        Mail::send('emails.changePassword', ['email' => $user['email'], 'user' => $user, 'link' => $link], function ($m) use ($user) {
            $m->to($user['email'], $user['name'])->subject('لینک تغییر رمز عبور' . date('Y-m-d H:i:s'));
        });
        User::where('id', $user->id)->update(['remember_token' => $remember_token, 'updated_at' => strtotime(date('Y-m-d H:i:s'))]);
        return view('web.auth.index', ['status' => 'forgetPasswordSucMessage'])->with('success', 'کاربر گرامی ، اطلاعات با موفقیت ثبت گردید. لطفا برای تغییر رمز عبور به پست الکترونیک خود مراجعه کنید.');
    }


    public function changePassword($rememberToken, Request $request)
    {
        $user = User::where('remember_token', $rememberToken)->first();
        if (!$user)
            return redirect('message?error=url مورد نظر اشتباه است');
        return view('web.auth.forgetPassword', compact('user'));
    }

    public function changeForgetPassword(Request $request)
    {
        $user = User::where('remember_token', $request->remember_token)->first();
        if (!$user)
            return redirect('message?error=url مورد نظر اشتباه است');
        $validator = \Validator::make($request->input(), [
            'password' => 'required|confirmed|min:6',
        ]);
        if ($validator->fails())
            return view('web.auth.forgetPassword', compact('user'))->withErrors($validator->errors());
        User::where('id', $user->id)->update(['password' => \Hash::make($request->password), 'remember_token' => '', 'updated_at' => strtotime(date('Y-m-d H:i:s'))]);
        return view('web.auth.forgetPassword', ['status' => 'success'], compact('user'));
    }


}
