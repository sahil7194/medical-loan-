<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function show_welcome_page()
    {
        return view('welcome');
    }

    public function show_home_page()
    {
        return view('auth.home');
    }
    public function show_login_page()
    {
        return view('auth.login');
    }

    public function show_signup_page()
    {
        return view('auth.signup');
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
