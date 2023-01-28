<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticateController extends Controller
{
    public function admin()
    {
        return view('backend.auth.login');
    }

    public function registration()
    {
        return view('backend.auth.register');
    }
    public function forgetPassword()
    {
        return view('backend.auth.reset-password');
    }
}
