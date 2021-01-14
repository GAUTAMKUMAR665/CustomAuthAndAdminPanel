<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/verify.css') }}">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
/* $(function(){
    $('#otpsubmit').click(function(){
       // alert('otpclicked');
        //$('.cont_info_log_sign_up2').attr('display','block');
    });

}); */

    </script>
</head>
<body>

<div class="cotn_principal">
<div class="cont_centrar">

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">

        <h2>OTP Verification</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  <form action="verify" method="post">
   <input type="text" value="{{ $user->phone }}" name="verification_method">
<input type="submit" value="submit" class="btn_login" id='otpsubmit'>
@csrf
</form>
  </div>
  </div>

<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>E-mail Verification</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
  <form action="verify" method="post">
    <input type="text" value="{{ $user->email }}" name="verification_method">
 <input type="submit" value="Verify" class="btn_login">
 @csrf
 </form>
</div>
  </div>
       </div>


    <div class="cont_back_info">
       <div class="cont_img_back_grey">
       <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
       </div>

    </div>
    <div class="cont_info_log_sign_up2">
        <div class="col_md_login2">
    <div class="cont_ba_opcitiy2">

          <h2>OTP Verification</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <form action="verify" method="post">
     <input type="text"  name="OTP">
     <input type="hidden" name="phone" id="" value="{{ $user->phone }}">
    <input type="submit" value="submit" class="btn_login">
    @csrf
    </form>
    </div>
      </div>



    </div>

  </div>
 </div>
</div>




</body>
</html>
