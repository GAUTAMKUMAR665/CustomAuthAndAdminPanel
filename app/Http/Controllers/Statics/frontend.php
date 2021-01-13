<?php

namespace App\Http\Controllers\Statics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontend extends Controller
{
   public function main()
   {
       return view('targlo.main');
   }
   public function index()
   {
       return view('targlo.index');
   }
   public function industry()
   {
       return view('targlo.industry');
   }
   public function service()
   {
       return view('targlo.services');
   }
   public function about()
   {
       return view('targlo.about');
   }
   public function contact()
   {
       return view('targlo.contact');
   }
}
