<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Authentication;
use Tymon\JWTAuth\Facades\JWTAuth ;
use Twilio\Rest\Client;
use Twilio\Rest\TwilioException;
use Twilio\Exceptions\RestException;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AuthenticationController extends Controller
{
    public function register(Request $request)
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
        $data=(request()->validate([
            'email'=>'required|email'
        ]));

        if($request->email)
        {
            $status=Authentication::select('is_verified')->where('email',$request->email);

            if($status==true)
            {
                $token=Authentication::select('password_token')->where('email',$request->email);

                if($token)
                {
                   $mailmsg=Mail::to($request->email)->send(new SendMail($token));
                }
                else{
                   $token=Str::random(80);
                   $report=Authentication::insert('password_token',$token)->where('email',$request->email);
                   $msgmail=Mail::to($request->email)->send(new SendMail($token));
                }
            }
            else{
                return response()->json('Message','Email is not Verified');
            }
        }


    }
}
