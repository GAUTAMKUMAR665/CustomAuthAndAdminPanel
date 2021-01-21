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
    <form action="/api/edit/report" method="post">
        <input type="hidden" value={{ $report->id }} name='id'>
        <label for="Report_Id">Report Type</label>
        <input type="text" name="Report_Type" id="Report_Type" value="{{$report->Report_Type}}">
        <label for="Title">Title</label>
        <input type="text" name="Title" id="Title" value="{{$report->Title}}">
        <label for="Report_URL">Report_URL</label>
        <input type="text" name="Slug" id="Report_URL" value="{{ $report->Slug }}">
        <label for="Catogery">Catogery</label>
        <input type="text" name="Meta_Title" id="Catogery" value="{{ $report->Meta_Title }}">
        <label for="Single_User_Amount">Single_User_Amount</label>
        <input type="text" name="Single_User_Amount" id="Single_User_Amount" value="{{ $report->Single_User_Amount }}">
        <label for="Multi_User_Amount">Multi_User_Amount</label>
        <input type="text" name="Multi_User_Amount" id="Multi_User_Amount" value="{{ $report->Multi_User_Amount }}">
        <label for="Enterprise_Amount">Enterprise_Amount</label>
        <input type="text" name="Enterprise_Amount" id="Enterprise_Amount" value="{{ $report->Enterprise_Amount }}">
        <label for="Data_Pack_Amount">Data_Pack_Amount</label>
        <input type="text" name="Data_Pack_Amount" id="Data_Pack_Amount" value="{{ $report->Data_Pack_Amount }}">
        <label for=" Date_Published"> Date_Published</label>
        <input type="text" name="Date_Published" id="Date_Published" value="{{ $report->Date_Published }}">
        <input type="submit" value="submit" >
@csrf
    </form>
</body>
</html>
@endsection
