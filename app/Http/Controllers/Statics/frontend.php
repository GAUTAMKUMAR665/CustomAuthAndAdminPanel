<?php

namespace App\Http\Controllers\Statics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontend extends Controller
{
   public function index()
   {
       return view('targlo.main');
   }
}
