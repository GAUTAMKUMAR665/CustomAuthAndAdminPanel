@extends('Admin.panel')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD Catogery</title>
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
    <form action="/api/add/catogery" method="post">
        <label for="catogery_id">Enter Catogery Id</label>
        <input type="text" name="catogery_id" id="catogery_id">
        <label for="catogery_name">Enter Catogery Name</label>
        <input type="text" name="catogery_name" id="catogery_name">
        <label for="Slug">Enter A Slug</label>
        <input type="text" name="catogery_slug" id="Slug">
        <input type="submit" value="submit">
@csrf
    </form>
</body>
</html>

@endsection
