<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'first_name.required' => 'يجب ادخال الاسم الاول.',
            'last_name.required' => 'يجب ادخال الاسم الثاني.',
            'email.required' => 'يجب ادخال البريد الالكتروني.',
            'email.email' => 'البريد الالكتروني غير صالح.',
            'email.unique' => 'البريد الالكتروني مستخدم بالفعل.',
            'phone.required' => 'يجب ادخال رقم الجوال.',
            'phone.unique' => 'رقم الجوال مستخدم بالفعل.',
            'address.required' => 'يجب ادخال العنوان.',
            'password.required' => 'يجب ادخال كلمة السر.',
            'password.min' => 'يجب ان تكون كلمة السر لا تقل عن 8 خانات.',
            'password.confirmed' => 'تأكيد خاطئ لكلمة السر.',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
