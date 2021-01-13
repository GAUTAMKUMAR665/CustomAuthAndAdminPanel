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
    <form action="/api/edit/pressrelease" method="post">
        <input type="hidden" value="{{ $report->id }}" name='id'>
        <label for="Meta_Title">Meta_Title</label>
        <input type="text" name="Meta_Title" id="Meta_Title" value="{{$report->Meta_Title}}">
<label for="Added Date"></label>
<input type="text" name="created_at" id="Added Date" value="{{$report->created_at}}">
<label for="Modified Date"></label>
<input type="text" name="updated_at" id="Meta_Title" value="{{$report->updated_at}}">
        <input type="submit" value="submit" >
@csrf
    </form>
</body>
</html>
