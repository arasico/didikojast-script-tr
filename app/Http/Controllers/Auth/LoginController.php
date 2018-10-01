<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }
//        dd(\Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => 1]));
//        dd($request->all());
        if (\Auth::attempt(['email' => $request->email, 'password' => $request->password, 'active' => 1])) {
            // The user is active, not suspended, and exists.
            if (\Auth::user()->type == "admin")
                $this->redirectTo = "/dashboard";
            else
                $this->redirectTo = "/";
            return $this->sendLoginResponse($request);
        } elseif (\Auth::attempt(['phone' => $request->email, 'password' => $request->password, 'active' => 1])) {
            if (\Auth::user()->type == "admin")
                $this->redirectTo = "/dashboard";
            else
                $this->redirectTo = "/";
            return $this->sendLoginResponse($request);
        } else
            return redirect('login')->with('error', "کاربر گرامی ورود امکان پذیر نمی باشد");


        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
//        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);;
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    public function activation($rememberToken, Request $request)
    {
        $user = User::where('remember_token', $rememberToken)->first();
        if (count($user) == 0)
            return redirect('message?error=url مورد نظر اشتباه است');
        User::where('id', $user->id)->update(['remember_token' => '', 'active' => 1, 'updated_at' => strtotime(date('Y-m-d H:i:s'))]);
        return redirect('login');
    }


}
