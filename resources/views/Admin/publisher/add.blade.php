@extends('Admin.panel')

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
        <label for="publisher_id">Publisher_Id</label>
        <input type="text" name="publisher_id" id="publisher_id" >
        <label for="name">NAME</label>
        <input type="text" name="name" id="name" >
        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email" >
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phoneL" >
        <label for="url">URL</label>
        <input  name="url" id="url"></input>

        <input type="submit" value="submit" >
@csrf
    </form>
</body>
</html>

@endsection
