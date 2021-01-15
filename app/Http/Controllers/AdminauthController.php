<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminauthController extends Controller
{
    public function register()
    {
            return view('Admin.Auth.Admin.register');
    }
    public function registerstore(Request $request)
    {
        return view('Admin.Auth.registerstore');
    }

    public function login()
    {
        return view('Admin.Auth.Admin.login');
    }

    public function loginstore()
    {
        return view('Admin.Auth.loginstore');
    }

    public function otpform()
    {
        return view('Admin.Auth.loginstore');
    }
    public function otpverify()
    {
        return view('Admin.Auth.loginstore');
    }


}
