<?php

namespace App\Http\Controllers\Statics;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontend extends Controller
{
   public function main()
   {
       $industry=Admin::select('Meta_Title')->get()->toArray();
       $find="Market Size, Share and Forecast";
       $indusname=[];
       for ($i=0; $i <count($industry) ; $i++) {
           $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
       }
      $indus=json_decode(json_encode($indusname),False);


       return view('targlo.main',['indus'=> $indus]);
   }
   public function index()
   {
    $industry=Admin::select('Meta_Title')->get()->toArray();
    $find="Market Size, Share and Forecast";
    $indusname=[];
    for ($i=0; $i <count($industry) ; $i++) {
        $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
    }
   $indus=json_decode(json_encode($indusname),False);
       return view('targlo.index',['indus'=> $indus]);
   }
   public function industry()
   {
    $industry=Admin::select('Meta_Title')->get()->toArray();
    $find="Market Size, Share and Forecast";
    $indusname=[];
    for ($i=0; $i <count($industry) ; $i++) {
        $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
    }
   $indus=json_decode(json_encode($indusname),False);
       return view('targlo.industry',['indus'=> $indus]);
   }
   public function service()
   {
    $industry=Admin::select('Meta_Title')->get()->toArray();
    $find="Market Size, Share and Forecast";
    $indusname=[];
    for ($i=0; $i <count($industry) ; $i++) {
        $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
    }
   $indus=json_decode(json_encode($indusname),False);
       return view('targlo.services',['indus'=> $indus]);
   }
   public function report( $industry)
   {
       //dd($industry);
       $industry=Admin::select('Meta_Title')->get()->toArray();
       $find="Market Size, Share and Forecast";
       $indusname=[];
       for ($i=0; $i <count($industry) ; $i++) {
           $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
       }
      $indus=json_decode(json_encode($indusname),False);
       $find="!";

       $indusname=str_ireplace($find,"Market Size, Share and Forecast",$industry);

       $report=Admin::where(['Meta_Title'=>$indusname])->get();

       //dd($report);

       return view('targlo.report',['report'=>$report,'indus'=> $indus]);
   }
   public function about()
   {
    $industry=Admin::select('Meta_Title')->get()->toArray();
    $find="Market Size, Share and Forecast";
    $indusname=[];
    for ($i=0; $i <count($industry) ; $i++) {
        $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
    }
   $indus=json_decode(json_encode($indusname),False);
       return view('targlo.about',['indus'=> $indus]);
   }
   public function contact()
   {
    $industry=Admin::select('Meta_Title')->get()->toArray();
    $find="Market Size, Share and Forecast";
    $indusname=[];
    for ($i=0; $i <count($industry) ; $i++) {
        $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
    }
   $indus=json_decode(json_encode($indusname),False);
       return view('targlo.contact',['indus'=> $indus]);
   }
   public function panel()
   {

       return view('Admin.AdminPanel');
   }

   public function payment()
   {
       return view('targlo.payment');
   }

   public function toc($toc){

//dd($toc);

$mtoc=Admin::where('Meta_Title',$toc)->pluck('Table_of_Content');
//dd($mtoc);
$toca=[];
//$toca=str_split($mtoc);
//dd($toca);
/*  $find=["<b>"];
for ($i=0; $i <100 ; $i++) {
    $br=$i.":";
    $ntoc=str_ireplace($find,$br,$mtoc);
} */
$seprator="\n";
$newstr=strtok($mtoc,$seprator);


dd($newstr);
   }
}
