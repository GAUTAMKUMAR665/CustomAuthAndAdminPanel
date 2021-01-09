<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Authentication;
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
use Illuminate\Support\Str;







class AuthenticationController extends Controller
{
    //use SendMail;

   public function register(Request $request)
   {
       $validator=Validator::make($request->all(),[
           'name'=>'required|string|max:255',
           'email'=>'required|string|max:255',
           'phone'=>'required',
           'password'=>'required',
           'confirmpassword'=>'required|same:password',
           'verification_method'=>'required'
       ]);

       if($validator->fails())
       {
            //$message=[];
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
           if(isset($errors->verification_method[0]))
           {

                $message['verification_method']=$errors->verification_method[0];
           }


           return response()->json(['status'=>0,'message'=>$message,'data'=>json_decode("{}")]);
       }
       else{

        $user=new Authentication();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=bcrypt($request->password);
        $user->confirmpassword=bcrypt($request->cofirmpassword);
        $user->verification_method=$request->verification_method;
        $user->save();

        $method=Authentication::select('verification_method')->where('email',$request->email)->get();

        if($method=='email')
        {
            $email=Authentication::where('email',$request->email)->pluck('email');

            $status=Mail::to($email)->send(new VerifyMail);

            if($status==null)
            {
              return response()->json(["status"=>1,'Message'=>"Email Sent!Please Check Email and Verify Email Id",'Data'=>json_decode('{}'),'Respondcode'=>"APP001"]);
            }
            else{

              return response()->json(["status"=>0,'Message'=>"Email Sending Failed!Please Provide A Valid Email ","Data"=>json_decode("{}"),"Respondcode"=>"NP977"]);
            }
        }
        else{
            //return response()->json("phone");
try {
    $phone=Authentication::where('phone',$request->phone)->pluck('phone');
    /* $token=getenv('TWILIO_AUTH_TOKEN');
    $twilio_sid=getenv('TWILIO_SID');
    $twilio_verify_sid=getenv('TWILIO_VERIFY_SID');
    $twilio=new Client($token,$twilio_sid);
    $verification=$twilio->verfiy->v2->services($twilio_verify_sid)
    ->verifications
    ->create($request->phone,"sms"); */
    $token=getenv("TWILIO_AUTH_TOKEN");
    $twilio_sid=getenv("TWILIO_SID");
    $twilio_verify_sid=getenv("TWILIO_VERIFY_SID");
    $twilio=new Client($token,$twilio_sid);
    $verification=$twilio->verify->v2->services($twilio_verify_sid)
    ->verifications
    ->create($phone, "sms");
    return response()->json(["Status"=>1,"Message"=>"OTP SENT","data"=>json_decode('{}'),"Respondcode"=>"APP001"]);

 /*    if($verification)
    {
       // return response()->json($verification->sid);

       return response()->json(["Status"=>1,"Message"=>"OTP SENT","data"=>json_decode('{}'),"Respondcode"=>"APP001"]);
    }
    else
    {

       return response()->json(["Status"=>0,"Message"=>"Unable TO Send Otp!Please Check Your PhoneNumber","Data"=>json_decode('{}'),"Respondcode"=>"NP977"]);

    } */

     /*    $otp=rand(100000,999999);
        $message="Hi Welcome To Targlo App Your OTP is".$otp;
        $phone=$request->phone;

        if($this->sendSms($phone,$message)){
            return response()->json(['status'=>1,'message'=>"OTP SENT",'data'=>json_decode('{}'),'respondcode'=>'APP001']);
        }
        else{
            return response()->json(['status'=>0,'message'=>"OTP Sending Failed, Please Enter A Valid Phone Number",'data'=>json_decode('{}'),'respondcode'=>'NP977']);
        } */



} catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {
    return response()->json(["Status"=>0,"Message"=>"Unable TO Send Otp!Please Check Your PhoneNumber","Data"=>json_decode('{}'),"Respondcode"=>"NP977"]);
 // return $e;
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

                     $report=tap(Authentication::where('email',$request->email))->insert('_token',$token);

                    return response()->json(['status'=>1,'Message'=>'User Login Successsfully']);

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
        /*  $verify=Authentication::where('email',$request->email)->pluck('is_verfied');
         if($verify==true)
         {

         }
         else{
             return response()->json(['status'=>0,'Message'=>"Your Account Is Not Verified!Please Verify Your Account",'data'=>json_decode('{}')]);
         } */

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

             return response()->json(['status'=>$status]);
         }

   }



public function logout(Request $request)
{
  try{
    JWTAuth::invalidate($request->token);

    return response()->json('message','User Is Successfully Logout');
  }
  catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e)
  {
  return $e;
  }

}

    public function verify(Request $request)
    {
        $data=(request()->validate([
            'OTP'=>'required',
            'phone'=>'required'
        ]));
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
            return response()->json('Number is verified');
        }
}
   catch(RestException $e){
  return response()->json($e->getCode().":".$e->getmessage());
}



    }

    public function jwtdecode(Request $request)
    {
       // return response()->json($request->token);
        try{

            $user=JWTAuth::authenticate($request->token);

            return response()->json($user);

          }catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e)
          {
              return '$user';
          }
    }


    public function forgetPassword(Request $request)
    {
    }

}
