<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Authentication;
use Tymon\JWTAuth\Facades\JWTAuth ;
use Twilio\Rest\Client;
use Twilio\Rest\TwilioException;
use Twilio\Exceptions\RestException;
use App\Traits\SendMail;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Mail\OrderShipped;




class AuthenticationController extends Controller
{
    use SendMail;

   public function register(Request $request)
   {
       $validator=Validator::make($request->all(),[
           'name'=>'required|string|max:255',
           'email'=>'required|string|max:255|email:unique',
           'phone'=>'required',
           'password'=>'required',
           'confirmpassword'=>'required|same:password'
       ]);

       if($validator->fails())
       {
           $message=[];
           $errors=json_decode(json_encode($validator->errors()));

           if(isset($errors->name[0]))
           {
               $message=$errors->name[0];
           }
           elseif(isset($errors->email))
           {
               $message=$errors->email[0];
           }
           elseif(isset($errors->phone)){
               $message=$errors->phone[0];
           }
           elseif(isset($errors->password))
           {
               $message=$errors->password[0];
           }
           elseif(isset($errors->confirmpassword))
           {
                $message=$errors->confirmpassword[0];
           }

           return response()->json(['status'=>0,'message'=>$message,'data'=>json_decode("{}")]);
       }
       else{
        $otp=rand(100000,999999);
        $message="Hi Welcome To Targlo App Your OTP is".$otp;
        $phone=$request->phone;
        
        if($this->sendSms($phone,$message)){
            return response()->json(['status'=>1,'message'=>"OTP SENT",'data'=>json_decode('{}'),'respondcode'=>'APP001']);
        }
        else{
            return response()->json(['status'=>0,'message'=>"OTP Sending Failed, Please Enter A Valid Phone Number",'data'=>json_decode('{}'),'respondcode'=>'NP977']);
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

           // return response()->json(['email'=>$request->email]);
            // $status=Password::sendResetLink($request->only('email'));

            $status=Mail::to($request->email)->send(new OrderShipped);

             return response()->json(['status'=>$status]); 
         }
         
   }
    public function twilioregister(Request $request)
    {
           $data=(request()->validate([
               'name'=>'required',
               'email'=>'required|email',
               'phone'=>'required',
               'password'=>'required',
               'confirmpassword'=>'required|same:password',
           ]));
          // return response()->json("+".$request->phone);
try{
           $token=getenv("TWILIO_AUTH_TOKEN");
           $twilio_sid=getenv("TWILIO_SID");
           $twilio_verify_sid=getenv("TWILIO_VERIFY_SID");
           $twilio=new Client($twilio_sid,$token);
           $verification=$twilio->verify->v2->services($twilio_verify_sid)
           ->verifications
           ->create($request->phone, "sms"); 
         
           // return response()->json($verification->sid);
            if($verification->sid)
            {
                $user=new Authentication();
                $user->name=$request->name;
                $user->email=$request->email;
                $user->phone=$request->phone;
                $user->password=bcrypt($request->password);
                $user->confirmpassword=bcrypt($request->confirmpassword);
                $user->save();
                return response()->json(['message'=>'User Is Successfully Registered']);
            }
            else{
                return response()->json(['message'=>'Number is not Valid']);
            }
          

           //return response()->json($this->login($request));

      /*       try{
           $credentical=$request->only('email','password');
                   $token=JWTAuth::attempt($credentical);

                   return response()->json($token);
               }
  catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e)
  {
          return $e;
  } */
            //return response($this->login($request));//->json($this->login($request));
           }
            catch (RestException $e) {
                return response()->json( $e->getCode() . ' : ' . $e->getMessage().":i.e->"."Invalid Phone Number" );
            }
       

          
    }
    public function login(Request $request)
   
    {
         
        $credenticals=$request->only('email','password');
            try{
         $jwttoken=JWTAuth::attempt($credenticals);
        
    return response()->json(
        ['token'=>$jwttoken,
        'token_type'=>'Bearer',
        'user'=>JWTAuth::user(),
      ]);
}
catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e)
{
         return  $e;
      
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
