<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="verify" method="post">
        <label for="verification_method">Please Choose One of Optipn To Verify Your Account</label>
    <select name="verification_method" id="verification_method">
        <option value="{{ $user->email }}">Email</option>
        <option value="{{ $user->phone }}">Phone</option>
    </select>

    <input type="submit" value="submit">
    @csrf
    </form>
</body>
</html>
