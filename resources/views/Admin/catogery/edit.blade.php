@extends('Admin.panel')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Report</title>
<style>
    input{
        position: relative;
        width:100%;
        height: 30px;
        border-radius: 15px;
        outline: none;
        border-color:#000080;
    }
    input[type='submit']{
        width: 30%;
        margin-top: 10px;
        left:390px;
    }
</style>

</head>
<body>
    <form action="/api/edit/catogery" method="post">
        <input type="hidden" value="{{ $report->id }}" name='id'>
        <label for="catogery_id">Catogery_ID</label>
        <input type="text" name="catogery_id" id="catogery_id" value="{{$report->catogery_id}}">
        <label for="catogery_name">Catogery_Name</label>
        <input type="text" name="catogery_name" id="catogery_name" value="{{$report->catogery_name}}">
        <label for="catogery_slug">Catogery_Slug</label>
        <input type="text" name="catogery_slug" id="catogery_slug" value="{{$report->catogery_slug}}">
<label for="Added Date"></label>
<input type="text" name="created_at" id="Added Date" value="{{$report->created_at}}">
<label for="Modified Date"></label>
<input type="text" name="updated_at" id="Modified Date" value="{{$report->updated_at}}">
        <input type="submit" value="submit" >
@csrf
    </form>
</body>
</html>
@endsection
