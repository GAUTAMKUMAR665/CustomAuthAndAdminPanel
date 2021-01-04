<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Report extends Controller
{
    public function add(Request $request)
    {
        return view('Admin.Report.add');
    }
    public function view()
    {
         return view('Admin.Report.view');
    }
}
