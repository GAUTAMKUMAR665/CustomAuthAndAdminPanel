<html lang="en">
<head>
  <link href="{{ asset('css/forget.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container-center">
    <center>
    <img src = "{{ asset('css\targlo\img\forgotpassword-300x251.png') }}" width="30%" class="fimg" >
      </center>
  <h2>Don't Worry!</h2>
  <form action="/api/reset" method="post">
    <h4>
      Just provide your email<br>
      and we can do the rest
    </h4>
    <formgroup>
      <input type="text" name="email"/>
      <label for="email"><br>Email</label>
      <span>enter your email</span>
    </formgroup>


    <button id="login-btn">Next</button>


@csrf
  </form>

  <p>Did you remember? <a href="/api/Login/view">Sign In</a></p>
</div>
</body>
</html>

