<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Authentication;
use App\Models\Admin;
use Tymon\JWTAuth\Facades\JWTAuth ;
use Twilio\Rest\Client;
use Twilio\Rest\TwilioException;
use Twilio\Exceptions\RestException;
use App\Mail\SendMail;
use App\Mail\VerifyMail;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Str;







class AuthenticationController extends Controller
{
    //use SendMail;

    public function registerview()
    {
        return view('Auth.Register');
    }
    public function loginView()
    {
        return view('Auth.Login',);
    }
    public function forget()
    {
        return view('Auth.forget',);
    }

   public function register(Request $request)
   {
       $validator=Validator::make($request->all(),[
           'name'=>'required|string|max:255',
           'email'=>'required|string|max:255|unique:authentications,email',
           'phone'=>'required|unique:authentications,phone',
           'password'=>'required',
           'confirmpassword'=>'required|same:password',

       ]);

       if($validator->fails())
       {
            $message=[];
           //$message=['name'=>'','email'=>'','phone'=>'','password'=>'','cofirmpassword'=>''];
           $errors=json_decode(json_encode($validator->errors()));

           if(isset($errors->name[0]))
           {

              $message['name']=$errors->name[0];
           }
           if(isset($errors->email[0]))
           {

               $message['email']=$errors->email[0];
           }
           if(isset($errors->phone[0])){

               $message['phone']=$errors->phone[0];
           }
           if(isset($errors->password[0]))
           {

               $message['password']=$errors->password[0];
           }
           if(isset($errors->confirmpassword[0]))
           {

                $message['confirmpassword']=$errors->confirmpassword[0];
           }
           return Redirect::route('Register')->withErrors($message)->withInput();
         // return redirect('/api/Register/view')->withErrors(['message'=>$message]);
          // return back()->withErrors(['status'=>0,'message'=>$message,'data'=>json_decode("{}")]);
          // return response()->json(['status'=>0,'message'=>$message,'data'=>json_decode("{}")]);
       }
       else{

        $email=Authentication::select("*")->pluck('email');

        $user=new Authentication();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=bcrypt($request->password);
        $user->confirmpassword=bcrypt($request->cofirmpassword);
        $user->save();

return view('Auth.verify',['user'=>$user]);
       }

   }

   public function verification(Request $request)
   {
      $validator=Validator::make($request->all(),[
          'verification_method'=>'required'
      ]);

      if($validator->fails())
      {
          $errors=json_decode(json_encode($validator->errors()));
          $message=[];
          if(isset($errors->verification_method[0]))
           {

                $message['verification_method']=$errors->verification_method[0];
           }
           return response()->json(['Status'=>0,"Message"=>"Please Select A verification Method"]);
      }
      else{
//$method=Authentication::select('verification_method')->where('email',$request->email)->get();
if(strpos($request->verification_method,'@'))
{
    $status=Mail::to($request->verification_method)->send(new VerifyMail);

    if($status==null)
    {
           $verify=tap(Authentication::where('email',$request->verification_method))->update(['is_verified'=>1]);
            return view('Auth.Login');
        //return redirect('/verifyemail');
      //return response()->json(["status"=>1,'Message'=>"Email Sent!Please Check Email and Verify Email Id",'Data'=>json_decode('{}'),'Respondcode'=>"APP001"]);
    }
    else{

      return response()->json(["status"=>0,'Message'=>"Email Sending Failed!Please Provide A Valid Email ","Data"=>json_decode("{}"),"Respondcode"=>"NP977"]);
    }
}
else{

    try{
        $token=getenv('TWILIO_AUTH_TOKEN');
        $twilio_sid=getenv('TWILIO_SID');
        $twilio_verify_sid=getenv('TWILIO_VERIFY_SID');

        $twilio=new Client($twilio_sid,$token);

        $twilio->verify->v2->services($twilio_verify_sid)
        ->verifications
        ->create($request->verification_method,"sms");
         //return redirect()->back();
        return view('Auth.verifycode',['phone'=>$request->verification_method]);
        //return response()->json(["status"=>1,'Message'=>"OTP Sent!Please Check phone and Verify Your Account ",'Data'=>json_decode('{}'),'Respondcode'=>"APP001"]);

    }
    catch(RestException $e)
    {
        return response()->json(["status"=>0,'Message'=>$e->getCode().":".$e->getMessage()."OTP sending failed!Please Check phone and Verify Your Account ",'Data'=>json_decode('{}'),'Respondcode'=>"APP001"]);

    }

    }

      }

   }

   public function login(Request $request)
   {


       $validator=Validator::make($request->all(),[
           'email'=>'required|email',
           'password'=>'required'
       ]);

       if($validator->fails())
       {
           $errors=json_decode(json_encode($validator->errors()));

           if(isset($errors->email[0]))
           {
               $message['email']=$errors->email[0];
           }
           if(isset($errors->password[0]))
           {
             $message['password']=$errors->password[0];
           }

           return response()->json(['status'=>0,'Message'=>$message,'Data'=>json_decode('{}')]);
       }
       else{

         $email=Authentication::select('*')->pluck('email');
         foreach($email as $emails)
         {
             if($emails==$request->email)
             {
                   $verify=Authentication::where('email',$request->email)->pluck('is_verified');
         if($verify[0]==1)
         {
                 try {
                     $token=JWTAuth::attempt($request->only('email','password'));

                     $report=tap(Authentication::where('email',$request->email))->update(['_token'=>$token]);

                     $industry=Admin::select('Meta_Title')->get()->toArray();
                     $find="Market Size, Share and Forecast";
                     $indusname=[];
                     for ($i=0; $i <count($industry) ; $i++) {
                         $indusname[$i]=str_ireplace($find,'!',$industry[$i]);
                     }
                    $indus=json_decode(json_encode($indusname),False);

                     return view('targlo.main',['token'=>$token,'indus'=>$indus]);
                     //return redirect('/')->with(['token'=>$token]);

                   // return response()->json(['status'=>1,'Message'=>'User Login Successsfully']);

                 } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {

                    return response()->json(['status'=>0,'Message'=>"Unable To Generate Token!Your Credenticals is NOT Found"]);
                     //throw $th;
                 }

            return response()->json(['status'=>1,'Message'=>'Email Found','data'=>$verify]);
         }
         else{
             return response()->json(['status'=>0,'Message'=>"Your Account Is Not Verified!Please Verify Your Account",'data'=>json_decode('{}')]);
         }

             }
             else{
                 return response()->json(['status'=>0,'Message'=>'Email Not Found!Please Register YourSelf First!']);
             }
         }

       }
   }

   public function passwordReset(Request $request)
   {
       $message="";
         $validator=Validator::make($request->all(),[
             'email'=>'required|string|max:255|email'
         ]);

         if($validator->fails())
         {
             $errors=json_decode(json_encode($validator->errors()));
             if(isset($errors->email))
             {
                return response()->json(['status'=>0,'message'=>json_decode($errors->email[0])]);
             }
         }
         else{

            $status=Mail::to($request->email)->send(new SendMail);

             return response()->json(['status'=>'1',"Message"=>"Check Your Email and Follow link to Reset Your Password"]);
         }

   }



public function logout(Request $request)
{

   // return response()->json(['token'=>$request->token]);
   $TOKEN="Bearer ".$request->token;
   try{
    JWTAuth::invalidate($TOKEN);
    $pretoken=Authentication::where('_token',$request->token)->update(['_token'=>null]);

    return view('Auth.Login');

   // return response()->json(['message'=>'User Is Successfully Logout']);
  }
  catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e)
  {
  return $e;
  }

}

    public function verifyotp(Request $request)
    {
        $message=[];
        $validator=Validator::make($request->all(),[
            'OTP'=>'required',
            'phone'=>'required'
        ]);

        if($validator->fails())
        {
             $errors=json_decode(json_encode($validator->errors()));

             if(isset($errors->OTP[0]))
             {
                 $message['OTP']=$errors->OTP[0];
             }
             if(isset($errors->phone[0]))
             {
                 $message['phone']=$errors->phone[0];
             }
          return response()->json(['status'=>0,'Message'=>$message]);
        }
        else{
            try{
                $token=getenv("TWILIO_AUTH_TOKEN");
                $twilio_sid=getenv("TWILIO_SID");
                $twilio_verify_sid=getenv("TWILIO_VERIFY_SID");
                $twilio=new Client($twilio_sid,$token);
                $verification=$twilio->verify->v2->services($twilio_verify_sid)
                ->verificationChecks
                ->create($request->OTP,array('to'=>$request->phone));

                if($verification->valid)
                {
                    $user=tap(Authentication::where(['phone'=>$request->phone]))->update(['is_verified'=>true]);
                    return view('Auth.Login');

                }
                else{
                    return response()->json(["status"=>0,"message"=>"Please Enter A valid OTP"]);
                    return view('Auth.verifycode',['phone'=>$request->phone]);
                }
            }
            catch(RestException $e){
                //return view('Auth.verifycode',['phone'=>$request->phone]);
               // return back()->withInput(["phone"=>$request->phone]);
            return response()->json($e->getCode().":".$e->getmessage());
          }
        }








    }

    public function jwtdecode(Request $request)
    {
       // return response()->json($request->token);
        try{

            $user=JWTAuth::authenticate($request->token);

           // return view('Auth.profile',['user'=>$user]);

            return view('Auth.userprofile',['user'=>$user]);

           // return response($user->id);//->json($user->id);

          }catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e)
          {
              return '$user';
          }
    }
public function verifyemail()
{
    return response()->josn("email verified");
}

    public function forgetPassword(Request $request)
    {
    }

}
