@extends('Admin.home')

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
        <label for="Title">Enter Catogery Name</label>
        <input type="text" name="Title" id="Title">
        <label for="Slug">Enter A Slug</label>
        <input type="text" name="Slug" id="Slug">
        <label for="Description">Enter Description</label>
        <input type="text" name="Description" id="Description">
        <label for="Meta_Title">Enter Meta_Title</label>
        <input type="text" name="Meta_Title" id="Meta_Title">
        <label for="Meta_Description">Enter Meta_Description</label>
        <input type="text" name="Meta_Description" id="Meta_Description">
        <label for="Meta_Canonical">Enter Meta_Canonical</label>
        <input type="text" name="Meta_Canonical" id="Meta_Canonical">
        <input type="submit" value="submit">
@csrf
    </form>
</body>
</html>

@endsection
