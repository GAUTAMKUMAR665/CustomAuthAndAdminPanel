<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="Logout" method="post">
    <input type="hidden" name="token" value={{$token}}>
    <input type="submit" value="Logout">
    @csrf
</form>
<form action="GetUser" method="post">
    <input type="hidden" name="token" value={{$token}}>
    <input type="submit" value="profile">
    @csrf
</form>
</body>
</html>
