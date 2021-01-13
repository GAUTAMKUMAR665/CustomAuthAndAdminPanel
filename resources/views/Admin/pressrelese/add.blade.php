@extends('Admin.home')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD Press Release</title>
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
        margin-top: 30px;
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
    <form action="/api/add/pressrelease" method="post">
        <label for="name">Enter Publisher Name</label>
        <input type="text" name="name" id="name">
        <label for="email">Enter publisher Email</label>
        <input type="text" name="Slug" id="Slug">
        <label for="phone">Enter publisher Phone.No</label>
        <input type="text" name="phone" id="phone">
        <label for="message">Enter Publisher Message </label>
        <textarea type="text" name="message" id="message"></textarea>
        <input type="submit" value="submit">
@csrf
    </form>
</body>
</html>

@endsection
