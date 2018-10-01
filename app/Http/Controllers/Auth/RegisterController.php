<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function register(Request $request)
    {
        if (strlen($request->phone) != 11)
            return view('web.auth.index', ['status' => 'register'])->withErrors(['کاربر گرامی ،تلفن همراه اشتباه می باشد.']);
        if (User::where('phone', $request->phone)->first())
            return view('web.auth.index', ['status' => 'register'])->withErrors(['کاربر گرامی ،تلفن همراه تکراری می باشد.']);
        if (User::where('email', $request->email)->first())
            return view('web.auth.index', ['status' => 'register'])->withErrors(['کاربر گرامی ،پست الکترونیک تکراری می باشد.']);
        $remember_token = sha1($request->email . time());
        $info = User::create(['type' => 'user', 'name' => $request->name, 'remember_token' => $remember_token, 'username' => '', 'auto_charge' => '', 'type_phone' => '', 'active' => 0, 'expire_at' => 0, 'info' => [], 'email' => $request->email, 'password' => bcrypt($request->password), 'phone' => $request->phone, 'updated_at' => strtotime(date('Y-m-d H:i:s')), 'created_at' => strtotime(date('Y-m-d H:i:s')), 'type_row' => 1]);
        $link = url('user/activation/' . $remember_token);
        $user = $request->all();
        Mail::send('emails.activation', ['email' => $user['email'], 'user' => $user, 'link' => $link], function ($m) use ($user) {
            $m->to($user['email'], $user['name'])->subject('کد فعالسازی حساب کاربری برای' . date('Y-m-d H:i:s'));
        });
        User::where('id', $info->id)->update(['remember_token' => $remember_token, 'updated_at' => strtotime(date('Y-m-d H:i:s'))]);
        return redirect('register')->with('success', 'کاربر گرامی ، اطلاعات با موفقیت ثبت گردید. لطفا برای فعال سازی به پست الکترونیک خود مراجعه کنید.');
    }
}
