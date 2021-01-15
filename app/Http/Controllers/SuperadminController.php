<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperadminController extends Controller
{
    public function register()
    {
            return view('Admin.Auth.SuperAdmin.register');
    }
    public function registerstore(Request $request)
    {
        return view('Admin.Auth.SuperAdmin.registerstore');
    }

    public function login()
    {
        return view('Admin.Auth.SuperAdmin.login');
    }

    public function loginstore()
    {
        return view('Admin.Auth.SuperAdmin.loginstore');
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
