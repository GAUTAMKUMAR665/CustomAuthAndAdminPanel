<?php

namespace App\Http\Controllers\Statics;

use App\Models\Admin;
use App\Models\Admin\Catogery;
use App\Models\Admin\Publisher;
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

       $catogery=Catogery::select('*')->get();
       $catogeries=json_decode(json_encode($catogery));

       $publisher=Publisher::select('*')->get();
       $publishers=json_decode(json_encode($publisher));


       $industry=Admin::select('Meta_Title')->get()->toArray();
       $find="Market Size, Share and Forecast";
       $indusname=[];
       for ($i=0; $i <count($industry) ; $i++) {
           $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
       }
      $indus=json_decode(json_encode($indusname),False);


       return view('targlo.main',['indus'=> $indus,'catogery'=>$catogery,'publisher'=>$publisher]);
   }
   public function main2()
   {
       $industry=Admin::select('Meta_Title')->get()->toArray();
       $find="Market Size, Share and Forecast";
       $indusname=[];
       for ($i=0; $i <count($industry) ; $i++) {
           $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
       }
      $indus=json_decode(json_encode($indusname),False);


       return view('targlo.main2',['indus'=> $indus,'catogery'=>$catogery,'publisher'=>$publisher]);
   }
   public function index()
   {
    $catogery=Catogery::select('*')->get();


    $publisher=Publisher::select('*')->get();

    $industry=Admin::select('Meta_Title')->get()->toArray();
    $find="Market Size, Share and Forecast";
    $indusname=[];
    for ($i=0; $i <count($industry) ; $i++) {
        $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
    }
   $indus=json_decode(json_encode($indusname),False);
       return view('targlo.index',['indus'=> $indus,'catogery'=>$catogery,'publisher'=>$publisher]);
   }
   public function industry()
   {
    $catogery=Catogery::select('*')->get();


    $publisher=Publisher::select('*')->get();
    $industry=Admin::select('Meta_Title')->get()->toArray();
    $find="Market Size, Share and Forecast";
    $indusname=[];
    for ($i=0; $i <count($industry) ; $i++) {
        $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
    }
   $indus=json_decode(json_encode($indusname),False);
       return view('targlo.industry',['indus'=> $indus,'catogery'=>$catogery,'publisher'=>$publisher]);
   }

   public function industrysearch(Request $request)
   {
    $catogery=Catogery::select('*')->get();


    $publisher=Publisher::select('*')->get();
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
    $catogery=Catogery::select('*')->get();


    $publisher=Publisher::select('*')->get();
    $industry=Admin::select('Meta_Title')->get()->toArray();
    $find="Market Size, Share and Forecast";
    $indusname=[];
    for ($i=0; $i <count($industry) ; $i++) {
        $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
    }
   $indus=json_decode(json_encode($indusname),False);
       return view('targlo.services',['indus'=> $indus,'catogery'=>$catogery,'publisher'=>$publisher]);
   }
   public function catogery( $industry)
   {
       //dd($industry);
       $catogery=Catogery::select('*')->get();


       $publisher=Publisher::select('*')->get();
       $catid=Admin::where(['Category_Id'=>$industry])->get();
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
       //dd($catid);

       return view('targlo.reports',['report'=>$report,'indus'=> $indus,'catid'=>$catid,'catogery'=>$catogery,'publisher'=>$publisher]);
   }
   public function report( $industry)
   {
       //dd($industry);
       $catogery=Catogery::select('*')->get();


       $publisher=Publisher::select('*')->get();


       $industry=Admin::select('Meta_Title')->get()->toArray();

       $catid=Admin::where(['Meta_Title'=>$industry])->pluck('Category_Id');
       $pubid=Admin::where(['Meta_Title'=>$industry])->pluck('Publisher_Id');


       $catname=Catogery::where(['catogery_id'=>$catid])->get();
       $pubname=Publisher::where(['publisher_id'=>$pubid])->get();



     // dd($catname);

       $find="Market Size, Share and Forecast";
       $indusname=[];
       for ($i=0; $i <count($industry) ; $i++) {
           $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
       }
      $indus=json_decode(json_encode($indusname),False);
       $find="!";

       $indusname=str_ireplace($find,"Market Size, Share and Forecast",$industry);

      //dd($indusname);

       $report=Admin::where(['Meta_Title'=>$indusname])->get();

       //dd($report[0]->Meta_Description);;


  //dd($catid);

       //dd($report);
       //dd($catid);

       return view('targlo.report',['report'=>$report,'indus'=> $indus,'catid'=>$catid,'catogery'=>$catogery,'publisher'=>$publisher,'catname'=>$catname,'pubname'=>$pubname]);
   }
   public function reports()
   {

       return view('targlo.reports',['']);
   }
   public function about()
   {
    $catogery=Catogery::select('*')->get();


    $publisher=Publisher::select('*')->get();
    $industry=Admin::select('Meta_Title')->get()->toArray();
    $find="Market Size, Share and Forecast";
    $indusname=[];
    for ($i=0; $i <count($industry) ; $i++) {
        $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
    }
   $indus=json_decode(json_encode($indusname),False);
       return view('targlo.about',['indus'=> $indus,'catogery'=>$catogery,'publisher'=>$publisher]);
   }
   public function contact()
   {
    $catogery=Catogery::select('*')->get();


    $publisher=Publisher::select('*')->get();
    $industry=Admin::select('Meta_Title')->get()->toArray();
    $find="Market Size, Share and Forecast";
    $indusname=[];
    for ($i=0; $i <count($industry) ; $i++) {
        $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
    }
   $indus=json_decode(json_encode($indusname),False);
       return view('targlo.contact',['indus'=> $indus,'catogery'=>$catogery,'publisher'=>$publisher]);
   }
   public function contactstore(Request $request)
   {
    $catogery=Catogery::select('*')->get();


    $publisher=Publisher::select('*')->get();
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
