<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\SigninRequest;
use App\Http\Requests\Auth\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class AuthController extends Controller
{

    public function show_welcome_page()
    {
        if (!Auth::user()) {
        }
        return view('welcome');
    }

    public function show_home_page()
    {
        if (!Auth::user()) {
            return view('welcome');
        }

        return view('auth.home');
    }
    public function show_login_page()
    {
        return view('auth.login');
    }

    public function signin(SigninRequest $request)
    {
        $path =  Cache::get('path');

        $params = $request->validated();

        Auth::attempt($params);

        if($path){
            return redirect($path);
        }

        return redirect('home')->with([
            "message" => "Signup Successfully Done"
        ]);
    }

    public function show_signup_page()
    {
        return view('auth.signup');
    }

    public function signup(SignupRequest $request)
    {
        $params = $request->all();

        $user = User::create($params);

        Auth::login($user);

        return redirect('home')->with([
            "message" => "Signup Successfully Done"
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('')->with([
            "message" => "Logout Successfully Done"
        ]);
    }

    public function show_forget_password_page()
    {
        return view('auth.forgetpassword');
    }


    public function show_reset_password_page()
    {
        return view('auth.resetpassword');
    }
}
