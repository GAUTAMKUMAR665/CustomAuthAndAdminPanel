@extends('Admin.panel')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD REPORT</title>
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
    <form class="addform" action="/api/add/reports" method="post">
        <label for="Category_Id">Select Catogery Id</label>
        <select name="Category_Id" id="Category_Id">
            @foreach ($report as $reports)
                <option value="{{ $reports->Category_Id }}">{{ $reports->Category_Id }}</option>
            @endforeach
        </select>
        <label for="Publisher_Id">Select Publisher ID</label>
        <select name="Publisher_Id" id="Publisher_Id">
            @foreach ($report as $reports)
                <option value="{{ $reports->Publisher_Id}}">{{ $reports->Publisher_Id}}</option>
            @endforeach
        </select>
        <label for="Report_Type">Enter Report Type</label>
        <input type="text" name="Report_Type" id="Report_Type">
        <label for="Title">Enter A Title</label>
        <input type="text" name="Title" id="Titlee">
        <label for="Slug">Enter A Slug</label>
        <input type="text" name="Slug" id="Slug">
        <label for="Total_Page">Enter Total Pages</label>
        <input type="text" name="Total_Page" id="Total_Page">
        <label for="Table_of_Content">Enter Table of Content</label>
        <input type="text" name="Table_of_Content" id="Table_of_Content">
        <label for="Description">Enter Description</label>
        <input type="text" name="Description" id="Description">
        <label for="Segmentation">Enter Segmentation</label>
        <input type="text" name="Segmentation" id="Segmentation">
        <label for="key_player">Enter key_player</label>
        <input type="text" name="key_player" id="key_player">
        <label for="Summary">Enter Summary</label>
        <input type="text" name="Summary" id="Summary">
        <label for="Currency">Enter Currency</label>
        <input type="text" name="Currency" id="Currency">
        <label for="Single_User_Amount">Enter Single_User_Amount</label>
        <input type="text" name="Single_User_Amount" id="Single_User_Amount">
        <label for="Multi_User_Amount">Enter Multi_User_Amount</label>
        <input type="text" name="Multi_User_Amount" id="Multi_User_Amount">
        <label for="Enterprise_Amount">Enter Enterprise_Amount</label>
        <input type="text" name="Enterprise_Amount" id="Enterprise_Amount">
        <label for="Data_Pack_Amount">Enter Data_Pack_Amount</label>
        <input type="text" name="Data_Pack_Amount" id="Data_Pack_Amount">
        <label for="Meta_Title">Enter Meta_Title</label>
        <input type="text" name="Meta_Title" id="Meta_Title">
        <label for="Meta_Description">Enter Meta_Description</label>
        <input type="text" name="Meta_Description" id="Meta_Description">
        <label for="Meta_Canonical">Enter Meta_Canonical</label>
        <input type="text" name="Meta_Canonical" id="Meta_Canonical">
        <label for=" Date_Published">Enter  Date_Published</label>
        <input type="text" name="Date_Published" id="Date_Published">
        <input type="submit" value="submit">
@csrf
    </form>
</body>
</html>

@endsection
