@extends('Admin.home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD Publisher</title>
<style>
    input{
        width: 100%

    }
    input[type='submit']
    {
        position: relative;
        width: 30%;
        left:400px;
        color: aquamarine;
        margin-top: 100px;
    }
    select{
        position: relative;
        width:30%;
    }
    label{
        margin-top: 15px;
    }
</style>
</head>
<body>
    <form action="/api/add/publiser" method="post">
        <label for="name">NAME</label>
        <input type="text" name="name" id="name" >
        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email" >
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phoneL" >
        <label for="message">Message</label>
        <textarea  name="message" id="message"  rows="4"></textarea>

        <input type="submit" value="submit" >
@csrf
    </form>
</body>
</html>

@endsection
