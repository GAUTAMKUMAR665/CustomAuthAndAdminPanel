<?php

namespace App\Http\Controllers\Statics;

use App\Models\Admin;
use App\Models\Admin\Catogery;
use App\Models\Admin\SimpleRequest;
use App\Models\Admin\Publisher;
use App\Models\Client;
use App\Models\Admin\Contactus;
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


       $exclmation="!";

       $reportname=str_ireplace($exclmation,"Market Size, Share and Forecast",$industry);
     // dd($indusname);

     //dd($reportname);

       $report=Admin::where(['Meta_Title'=> $reportname])->get();

//dd($report);
       $catogery=Catogery::select('*')->get();





       $publisher=Publisher::select('*')->get();

      // dd($publisher);

       $industry=Admin::select('Meta_Title')->get()->toArray();

       $catid=Admin::where(['Meta_Title'=>$reportname])->pluck('Category_Id');

      // dd($catid);
       $pubid=Admin::where(['Meta_Title'=>$reportname])->pluck('Publisher_Id');

       //dd($pubid);


       $catname=Catogery::where(['catogery_id'=>$catid])->first();

       //$catnam=json_decode(json_encode($catname));

       //dd($catnam->catogery_name);
       $pubname=Publisher::where(['publisher_id'=>$pubid])->first();

       //$pubnam=json_decode(json_encode($pubname));

       //dd($pubnam->name);

       //dd($pubname[0]->name);



     // dd($catname);
     $find="Market Size, Share and Forecast";


       $indusname=[];
       for ($i=0; $i <count($industry) ; $i++) {
           $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
       }
      $indus=json_decode(json_encode($indusname),False);


       //dd($report[0]->Meta_Description);;


  //dd($catid);

      // dd($report);
       //dd($catid);
       return view('targlo.report',compact('report','indus','catid','catogery','publisher','catname','pubname'));
       //return view('targlo.report',['report'=>$report,'indus'=> $indus,'catid'=>$catid,'catogery'=>$catogery,'publisher'=>$publisher,'catname'=>$catname,'pubname'=>$pubname]);
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
   public function requeststore(Request $request)
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
       'first_name'=>'required',
       'last_name'=>'required',
       'email'=>'required|email',
       'phone'=>'required',
       'country'=>'required',
       'company'=>'required',
       'job_title'=>'required',
       'message'=>'required',
   ]);
$message=[];
   if($validator->fails())
   {
       $errors=json_decode(json_encode($validator->errors()));
      /*  if($errors->first_name)
       {
          $message['first_name']=$errors->first_name[0];
       }
       if($errors->last_name[0])
       {
           $message['last_name']=$errors->last_name[0];
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
       if($errors->country[0])
       {
          $message['country']=$errors->country[0];
       }
       if($errors->company[0])
       {
           $message['company']=$errors->company[0];
       }
       if($errors->job_title[0])
       {
         $message['job_title']=$errors->job_title[0];
       } */
         return response()->json(['errors'=>$errors]);
         //return back()->withErrors(['errors'=>$message]);
   }
   else{
       $client=new SimpleRequest();
       $client->first_name=$request->first_name;
       $client->last_name=$request->last_name;
       $client->email=$request->email;
       $client->phone=$request->phone;
       $client->message=$request->message;
       $client->country=$request->country;
       $client->company=$request->company;
       $client->job_title=$request->job_title;
       $client->save();
    $status=Mail::to('mailmelearnersociety665@gmail.com')
    ->cc('mailmekumargautam766@gmail.com')
    ->send(new Contactmail($client));
   }


       return view('targlo.contact',['indus'=> $indus,'catogery'=>$catogery,'publisher'=> $publisher]);
   }
   public function panel2()
   {

       return view('Admin.Panel');
   }
   public function sessy()
   {

       return view('Admin.sessydrop');
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
       'first_name'=>'required',
       'last_name'=>'required',
       'email'=>'required|email',
       'phone'=>'required',
       'country'=>'required',
       'company'=>'required',
       'job_title'=>'required',
       'message'=>'required',
   ]);
$message=[];
   if($validator->fails())
   {
       $errors=json_decode(json_encode($validator->errors()));
       if($errors->first_name[0])
       {
          $message['first_name']=$errors->first_name[0];
       }
       if($errors->last_name[0])
       {
           $message['last_name']=$errors->last_name[0];
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
       if($errors->country[0])
       {
          $message['country']=$errors->country[0];
       }
       if($errors->company[0])
       {
           $message['company']=$errors->company[0];
       }
       if($errors->job_title[0])
       {
         $message['job_title']=$errors->job_title[0];
       }
         return response()->json(['errors'=>$errors]);
         //return back()->withErrors(['errors'=>$message]);
   }
   else{
       $client=new Contactus();
       $client->first_name=$request->first_name;
       $client->last_name=$request->last_name;
       $client->email=$request->email;
       $client->phone=$request->phone;
       $client->message=$request->message;
       $client->country=$request->country;
       $client->company=$request->company;
       $client->job_title=$request->job_title;
       $client->save();
    $status=Mail::to('mailmelearnersociety665@gmail.com')->send(new Contactmail($client));
   }


       return view('targlo.contact',['indus'=> $indus,'catogery'=>$catogery,'publisher'=> $publisher]);
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
