@extends('Admin.panel')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
    <title>Edit Report</title>

</head>
<body>
    <main class="container">
        <header class="header text-center">
      <h1 id="title">Survey Form</h1>

    {{--   <p id="description">Thank you for taking out a few minutes to fill out this form.</p> --}}
        </header>
        <form id="survey-form" action="/api/edit/report" method="post">
            <input class="form-control" type="hidden" value={{ $report->id }} name='id'>
          <div class="form-group">
            <label for="Report_Id">Report Type</label>
            <input class="form-control" type="text" name="Report_Type" id="Report_Type" value="{{$report->Report_Type}}">
          </div>
          <div class="form-group">
            <label for="Title">Title</label>
            <input class="form-control" type="text" name="Title" id="Title" value="{{$report->Title}}">
          </div>
          <div class="form-group">
            <label for="Report_URL">Report_URL</label>
        <input class="form-control" type="text" name="Slug" id="Report_URL" value="{{ $report->Slug }}">
        </div>
        <div class="form-group">
            <label for="Catogery">Catogery</label>
            <input class="form-control" type="text" name="Meta_Title" id="Catogery" value="{{ $report->Meta_Title }}">
        </div>
        <div class="form-group">
            <label for="Single_User_Amount">Single_User_Amount</label>
            <input class="form-control" type="text" name="Single_User_Amount" id="Single_User_Amount" value="{{ $report->Single_User_Amount }}">
        </div>
        <div class="form-group">
            <label for="Multi_User_Amount">Multi_User_Amount</label>
            <input class="form-control" type="text" name="Multi_User_Amount" id="Multi_User_Amount" value="{{ $report->Multi_User_Amount }}">
        </div>
        <div class="form-group">
            <label for="Enterprise_Amount">Enterprise_Amount</label>
            <input class="form-control" type="text" name="Enterprise_Amount" id="Enterprise_Amount" value="{{ $report->Enterprise_Amount }}">
        </div>
        <div class="form-group">
            <label for="Data_Pack_Amount">Data_Pack_Amount</label>
            <input class="form-control" type="text" name="Data_Pack_Amount" id="Data_Pack_Amount" value="{{ $report->Data_Pack_Amount }}">
        </div>
        <div class="form-group">
            <label for=" Date_Published"> Date_Published</label>
            <input class="form-control" type="text" name="Date_Published" id="Date_Published" value="{{ $report->Date_Published }}">
        </div>

          <div class="form-group">

          <button id="submit" type="submit">
            Submit</button>

          </div>

        </form>

      </main>


   {{--  <form action="/api/edit/report" method="post">
        <input class="form-control" type="hidden" value={{ $report->id }} name='id'>
        <label for="Report_Id">Report Type</label>
        <input class="form-control" type="text" name="Report_Type" id="Report_Type" value="{{$report->Report_Type}}">
        <label for="Title">Title</label>
        <input class="form-control" type="text" name="Title" id="Title" value="{{$report->Title}}">
        <label for="Report_URL">Report_URL</label>
        <input class="form-control" type="text" name="Slug" id="Report_URL" value="{{ $report->Slug }}">
        <label for="Catogery">Catogery</label>
        <input class="form-control" type="text" name="Meta_Title" id="Catogery" value="{{ $report->Meta_Title }}">
        <label for="Single_User_Amount">Single_User_Amount</label>
        <input class="form-control" type="text" name="Single_User_Amount" id="Single_User_Amount" value="{{ $report->Single_User_Amount }}">
        <label for="Multi_User_Amount">Multi_User_Amount</label>
        <input class="form-control" type="text" name="Multi_User_Amount" id="Multi_User_Amount" value="{{ $report->Multi_User_Amount }}">
        <label for="Enterprise_Amount">Enterprise_Amount</label>
        <input class="form-control" type="text" name="Enterprise_Amount" id="Enterprise_Amount" value="{{ $report->Enterprise_Amount }}">
        <label for="Data_Pack_Amount">Data_Pack_Amount</label>
        <input class="form-control" type="text" name="Data_Pack_Amount" id="Data_Pack_Amount" value="{{ $report->Data_Pack_Amount }}">
        <label for=" Date_Published"> Date_Published</label>
        <input class="form-control" type="text" name="Date_Published" id="Date_Published" value="{{ $report->Date_Published }}">
        <input class="form-control" type="submit" value="submit" >
@csrf
    </form> --}}
</body>
</html>
@endsection
