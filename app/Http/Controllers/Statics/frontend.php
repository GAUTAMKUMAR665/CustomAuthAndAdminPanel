<?php

namespace App\Http\Controllers\Statics;

use App\Models\Admin;
use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\Contactmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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

   public function industrysearch(Request $request)
   {
       //dd($request->industry);
       if($request->industry)
       {
           $find="!";
           $add="Market Size, Share and Forecast";
           $indusname=str_ireplace($find,$add,$request->industry);

          $find=Admin::where('Meta_Title',$indusname)->get();

          dd($find);
       }
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
   public function contactstore(Request $request)
   {
    $industry=Admin::select('Meta_Title')->get()->toArray();
    $find="Market Size, Share and Forecast";
    $indusname=[];
    for ($i=0; $i <count($industry) ; $i++) {
        $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
    }
   $indus=json_decode(json_encode($indusname),False);

   $validator=Validator::make($request->all(),[
       'firstname'=>'required',
       'lastname'=>'required',
       'email'=>'required|email',
       'phone'=>'required',
       'message'=>'required',
   ]);
$message=[];
   if($validator->fails())
   {
       $errors=json_decode(json_encode($validator->errors()));
       if($errors->firstname[0])
       {
          $message['firstname']=$errors->firstname[0];
       }
       if($errors->lastname[0])
       {
           $message['lastname']=$errors->lastname[0];
       }
       if($errors->email[0])
       {
          $message['email']=$errors->email[0];
       }
       if($errors->phone[0])
       {
           $message['phone']=$errors->phone[0];
       }
       if($errors->message[0])
       {
         $message['message']=$errors->message[0];
       }
         return response()->json(['errors'=>$errors]);
         //return back()->withErrors(['errors'=>$message]);
   }
   else{
       $client=new Client();
       $client->firstname=$request->firstname;
       $client->lastname=$request->lastname;
       $client->email=$request->email;
       $client->phone=$request->phone;
       $client->message=$request->message;
       $client->save();
    $status=Mail::to('mailmelearnersociety665@gmail.com')->send(new Contactmail($client));
   }


       return view('targlo.contact',['indus'=> $indus]);
   }
   public function panel2()
   {

       return view('Admin.Panel');
   }
   public function sessy()
   {

       return view('Admin.sessydrop');
   }
   public function contact2()
   {

       return view('targlo.contactus');
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
