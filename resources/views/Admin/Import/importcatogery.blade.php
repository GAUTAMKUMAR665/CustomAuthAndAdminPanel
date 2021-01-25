@extends('Admin.panel')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   {{--  <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script> --}}
    <title>UPLOAD Catogery </title>

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
      <h1 id="title">Upload CATOGERY</h1>

     {{--  <p id="description">Thank you for taking out a few minutes to fill out this form.</p> --}}
        </header>
        <form id="survey-form"  action="/api/importcatogery" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input class="form-file" type="file" name="csvfile" id="csvid">
                </div>
                <button id="submit" type="submit">
                    Submit</button>

                  </div>
                @csrf
        </form>
</body>
</html>

@endsection

{{-- <form action="postcsv" method="post" enctype="multipart/form-data" id="formid">
    <input type="file" name="csvfile" id="csvid">
    <input type="submit" value="submit" id='subinput'>
   @csrf
</form> --}}
