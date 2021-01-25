@extends('Admin.panel')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{--  <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script> --}}
    <title>Add Report Form</title>

</head>
<body>
    <main class="container">
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li class="alert alert-danger">{{$error}}</li>
        @endforeach
    </ul>
</div>


@endif

@if (Session::has('Success'))
<div class="alert alert-success">
    <ul>
        <li class="alert alert-success">{{Session::get('success')}}</li>
    </ul>
</div>

@endif

        <header class="header text-center">
      <h1 id="title">ADD REPORT</h1>

     {{--  <p id="description">Thank you for taking out a few minutes to fill out this form.</p> --}}
        </header>
        <form id="survey-form"  action="/api/add/reports" method="post">
            <div class="form-group">

                <select id="dropdown" name="Learning-goals" class="form-control">
                  <option disabled selected value>Choose Category_Id </option>
                  @foreach ($report as $reports)
                  <option value="{{ $reports->Category_Id }}">{{ $reports->Category_Id }}</option>
                 @endforeach
                </select>
                </div>
                <div class="form-group">

                    <select id="dropdown" name="Learning-goals" class="form-control">
                      <option disabled selected value>Choose  Publisher_Id</option>
                      @foreach ($report as $reports)
                        <option value="{{ $reports->Publisher_Id}}">{{ $reports->Publisher_Id}}</option>
                      @endforeach
                    </select>
                    </div>
          <div class="form-group">
            <label for="Report_Type">Enter Report Type</label>
            <input class="form-control" type="text" name="Report_Type" id="Report_Type">
          </div>
          <div class="form-group">
            <label for="Title">Enter A Title</label>
            <input class="form-control" type="text" name="Title" id="Titlee">
          </div>
          <div class="form-group">
            <label for="Slug">Enter A Slug</label>
            <input class="form-control" type="text" name="Slug" id="Slug">
        </div>
        <div class="form-group">
            <label for="Total_Page">Enter Total Pages</label>
            <input class="form-control" type="text" name="Slug" id="Slug">

        </div>
        <div class="form-group">
            <label for="Table_of_Content">Enter Table of Content</label>
            <textarea id="textarea"   name="Table_of_Content"></textarea>
              </div>

              <div class="form-group">
                <label for="Description">Enter Description</label>
                <textarea id="textarea"   name="Description"></textarea>
                  </div>
        <div class="form-group">
            <label for="Description">Enter Description</label>
            <input class="form-control" type="text" name="Description" id="Description">
        </div>
        <div class="form-group">
            <label for="Segmentation">Enter Segmentation</label>
        <input class="form-control" type="text" name="Segmentation" id="Segmentation">
        </div>
        <div class="form-group">
            <label for="key_player">Enter key_player</label>
            <input class="form-control" type="text" name="key_player" id="key_player">
        </div>
        <div class="form-group">
            <label for="Summary">Enter Summary</label>
            <input class="form-control" type="text" name="Summary" id="Summary">
        </div>
        <div class="form-group">
            <label for="Currency">Enter Currency</label>
            <input class="form-control" type="text" name="Currency" id="Currency">
        </div>
        <div class="form-group">
            <label for="Single_User_Amount">Enter Single_User_Amount</label>
            <input class="form-control" type="text" name="Single_User_Amount" id="Single_User_Amount">
        </div>
        <div class="form-group">
            <label for="Multi_User_Amount">Enter Multi_User_Amount</label>
            <input class="form-control" type="text" name="Multi_User_Amount" id="Multi_User_Amount">
        </div>
        <div class="form-group">
            <label for="Enterprise_Amount">Enter Enterprise_Amount</label>
            <input class="form-control" type="text" name="Enterprise_Amount" id="Enterprise_Amount">
        </div>
        <div class="form-group">
            <label for="Data_Pack_Amount">Enter Data_Pack_Amount</label>
            <input class="form-control" type="text" name="Data_Pack_Amount" id="Data_Pack_Amount">
        </div>
        <div class="form-group">
            <label for="Data_Pack_Amount">Enter Data_Pack_Amount</label>
            <input class="form-control" type="text" name="Data_Pack_Amount" id="Data_Pack_Amount">
        </div>
        <div class="form-group">
            <label for="Meta_Title">Enter Meta_Title</label>
            <input class="form-control" type="text" name="Meta_Title" id="Meta_Title">
        </div>
        <div class="form-group">
            <label for="Meta_Description">Enter Meta_Description</label>
            <input class="form-control" type="text" name="Meta_Description" id="Meta_Description">
        </div>
        <div class="form-group">
            <label for="Meta_Canonical">Enter Meta_Canonical</label>
        <input class="form-control" type="text" name="Meta_Canonical" id="Meta_Canonical">
        </div>
        <div class="form-group">
            <label for=" Date_Published">Enter  Date_Published</label>
            <input class="form-control" type="text" name="Date_Published" id="Date_Published">
        </div>


          <div class="form-group">

          <button id="submit" type="submit">
            Submit</button>

          </div>
          @csrf
        </form>

      </main>

{{--
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
        <input class="form-control" type="text" name="Report_Type" id="Report_Type">
        <label for="Title">Enter A Title</label>
        <input class="form-control" type="text" name="Title" id="Titlee">
        <label for="Slug">Enter A Slug</label>
        <input class="form-control" type="text" name="Slug" id="Slug">
        <label for="Total_Page">Enter Total Pages</label>
        <input class="form-control" type="text" name="Total_Page" id="Total_Page">
        <label for="Table_of_Content">Enter Table of Content</label>
        <input class="form-control" type="text" name="Table_of_Content" id="Table_of_Content">
        <label for="Description">Enter Description</label>
        <input class="form-control" type="text" name="Description" id="Description">
        <label for="Segmentation">Enter Segmentation</label>
        <input class="form-control" type="text" name="Segmentation" id="Segmentation">
        <label for="key_player">Enter key_player</label>
        <input class="form-control" type="text" name="key_player" id="key_player">
        <label for="Summary">Enter Summary</label>
        <input class="form-control" type="text" name="Summary" id="Summary">
        <label for="Currency">Enter Currency</label>
        <input class="form-control" type="text" name="Currency" id="Currency">
        <label for="Single_User_Amount">Enter Single_User_Amount</label>
        <input class="form-control" type="text" name="Single_User_Amount" id="Single_User_Amount">
        <label for="Multi_User_Amount">Enter Multi_User_Amount</label>
        <input class="form-control" type="text" name="Multi_User_Amount" id="Multi_User_Amount">
        <label for="Enterprise_Amount">Enter Enterprise_Amount</label>
        <input class="form-control" type="text" name="Enterprise_Amount" id="Enterprise_Amount">
        <label for="Data_Pack_Amount">Enter Data_Pack_Amount</label>
        <input class="form-control" type="text" name="Data_Pack_Amount" id="Data_Pack_Amount">
        <label for="Meta_Title">Enter Meta_Title</label>
        <input class="form-control" type="text" name="Meta_Title" id="Meta_Title">
        <label for="Meta_Description">Enter Meta_Description</label>
        <input class="form-control" type="text" name="Meta_Description" id="Meta_Description">
        <label for="Meta_Canonical">Enter Meta_Canonical</label>
        <input class="form-control" type="text" name="Meta_Canonical" id="Meta_Canonical">
        <label for=" Date_Published">Enter  Date_Published</label>
        <input class="form-control" type="text" name="Date_Published" id="Date_Published">
        <input class="form-control" type="submit" value="submit">
@csrf
    </form> --}}
</body>
</html>

@endsection
