<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="/api/Login" method="post">
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit" value="submit">
        @csrf
    </form>
 <a href="{{ url('/') }}/api/forget">Forget Password</a>
</body>
</html>
