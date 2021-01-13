<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Aboutus extends Controller
{
    public function view()
    {
      return
    }
    public function editform()
    {
        return
    }
    public function edit(Request $request)
    {
        $validator=Validator::make($request->all(),[]);
    }

    public function addform()
    {
        return
    }

    public function add(Request $request)
    {
        $validator=Validator::make($request->all(),[]);
        return
    }

    public function delete(Request $request)
    {
        $validator=Validator::make($request->all(),[]);
        return
    }
}
