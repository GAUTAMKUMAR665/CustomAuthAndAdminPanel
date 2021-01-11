<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify OTP</title>
</head>
<body>
    <form action="verifyotp" method="post">
        <input type="text" name="OTP" >
        <input type="text" value="{{$phone}}" name="phone">
        <input type="submit" value="submit">
        @csrf
    </form>
</body>
</html>
