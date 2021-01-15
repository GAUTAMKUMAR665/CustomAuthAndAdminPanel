<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/targlo/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/targlo/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="{{ asset('js/auth.js') }}"></script>
    <title>Login</title>
</head>
<body>
    <div class="overlay">
        <!-- LOGN IN FORM by Omar Dsoky -->
        <form action="/api/Login" method="post">
           <!--   con = Container  for items in the form-->
           <div class="con">
           <!--     Start  header Content  -->
           <header class="head-form">
              <h2>Log In</h2>
              <!--     A welcome message or an explanation of the login form -->
              <p>login here using your Phone</p>
           </header>
           <!--     End  header Content  -->
           <br>
           <div class="field-set">

            <form action="" method="post">

              <!--   user name -->
                 <span class="input-item">
                   <i class="fa fa-phone"></i>
                 </span>
                <!--   user name Input-->
                 <input class="form-input" id="txt-input" type="text" placeholder="Phone" name="Phone" required>



        <!--      Show/hide password  -->
             <span>
                <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
             </span>


              <br>
              @csrf
            </form>
        <!--        buttons -->
        <!--      button LogIn -->
              <button class="log-in"> Log In </button>
           </div>

        <!--   other buttons -->
           <div class="other">
        <!--      Forgot Password button-->
        <a href="{{ url('/') }}/api/forget" class="btn submits frgt-pass">Forget Password</a>
             {{--  <button class="btn submits frgt-pass">Forgot Password</button> --}}
        <!--     Sign Up button -->
              <a class="btn submits sign-up" href="{{ url('/') }}/api/superadmin/register">Sign Up
        <!--         Sign Up font icon -->
              <i class="fa fa-user-plus" aria-hidden="true"></i>
              </a>
        <!--      End Other the Division -->
           </div>

        <!--   End Conrainer  -->
          </div>

          <!-- End Form -->
        </form>
        </div>

</body>
</html>
