<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Authentication;
use Tymon\JWTAuth\Facades\JWTAuth ;
use Twilio\Rest\Client;
use Twilio\Rest\TwilioException;
use Twilio\Exceptions\RestException;

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
try{
           $token=getenv("TWILIO_AUTH_TOKEN");
           $twilio_sid=getenv("TWILIO_SID");
           $twilio_verify_sid=getenv("TWILIO_VERIFY_SID");
           $twilio=new Client($twilio_sid,$token);
           $verification=$twilio->verify->v2->services($twilio_verify_sid)
           ->verifications
           ->create($request->phone, "sms");
         
            //return response()->json($verification->sid);
            $user=new Authentication();
            $user->name=$request->name;
            $user->email=$request->email;
            $user->phone=$request->phone;
            $user->password=bcrypt($request->password);
            $user->confirmpassword=bcrypt($request->confirmpassword);
             
            $user->save();
  
            return response()->json($this->login($request),201);
           }
            catch (RestException $e) {
                return response()->json( $e->getCode() . ' : ' . $e->getMessage().":i.e->"."Invalid Phone Number" );
            }
         /*  $user=new Authentication();
          $user->name=$request->name;
          $user->email=$request->email;
          $user->phone=$request->phone;
          $user->password=bcrypt($request->password);
          $user->confirmpassword=bcrypt($request->confirmpassword);
           
          $user->save();

          return response()->json($this->login($request),201); */

          
    }
    public function login(Request $request)
    {
           $credenticals=$request->only('email','password');
          
try{
    $jwttoken=JWTAuth::attempt($credenticals);
    return response()->json($jwttoken);
}
catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e)
{
         return  $e;
      
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
        try{

            $user=JWTAuth::authenticate($request->token);

            return response()->json($user);

          }catch(\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e)
          {
              return '$user';
          }
    }
}
