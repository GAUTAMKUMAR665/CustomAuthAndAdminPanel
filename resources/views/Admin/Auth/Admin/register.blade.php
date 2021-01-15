<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <style href="{{asset('css/register.css')}}" rel="stylesheet"></style>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>
                <a href="#">
                    <img src="http://tfgms.com/sandbox/dailyui/logo-1.png" alt="Authentication Targlo">
                </a>
            </h1>
        </header>
        <h1 class="text-center">Register</h1>
        <form class="registration-form" action="/api/Register" method="post">
            <label class="col-one-half">
                <span class="label-text">Name</span>
                <input type="text" name="name" autocomplete="false">
            </label>
            <label class="col-one-half">
                <span class="label-text">Email</span>
                <input type="text" name="email" autocomplete="false">
            </label>
            <label>
                <span class="label-text">Phone</span>
                <input type="text" name="phone">
            </label>
            <label class="password">
                <span class="label-text">Password</span>
                <button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
                    <span class="glyphicon glyphicon-eye-close"></span>
                </button>
                <input type="password" name="password" autocomplete="false">
            </label>
            <label class="password">
                <span class="label-text">ConfirmPassword</span>
                <button class="toggle-visibility" title="toggle password visibility" tabindex="-1">
                    <span class="glyphicon glyphicon-eye-close"></span>
                </button>
                <input type="password" name="confirmpassword" >
            </label>
            <div class="text-center">
                <button class="submit" name="register">Sign Me Up</button>
            </div>
            @csrf
        </form>
    </div>



</body>
</html>
