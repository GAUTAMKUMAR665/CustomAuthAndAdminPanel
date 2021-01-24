@extends('Admin.panel')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Catogery Form</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>


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
        @if (Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li class="alert alert-success">{{Session::get('success')}}</li>
            </ul>
        </div>
    @endif
        <header class="header text-center">
      <h1 id="title">Update Catogery</h1>

   {{--    <p id="description">Thank you for taking out a few minutes to fill out this form.</p> --}}
        </header>
        <form id="survey-form" action="/api/edit/catogery" method="post">
            <input type="hidden" value="{{ $report->id }}" name='id'>
          <div class="form-group">
          <label id="name-label" for="catogery_id">Catogery Id</label>
          <input id="catogery_id"  class="form-control" type="text" name="catogery_id" value="{{$report->catogery_id}}" required>
          </div>
          <div class="form-group">
          <label id="catogery_name" for="catogery_name">Catogery Name</label>
          <input id="catogery_name" class="form-control" type="text" name="catogery_name" value="{{$report->catogery_name}}" required>
          </div>
          <div class="form-group">
            <label id="catogery_slug" for="catogery_slug">Catogery Slug</label>
            <input id="catogery_slug" class="form-control" type="text" name="catogery_slug" value="{{$report->catogery_slug}}" required>
            </div>
            <div class="form-group">
                <label id="Added Date" for="Added Date">Added Date</label>
                <input id="Added Date" class="form-control" type="text" name="created_at" value="{{$report->created_at}}" required>
                </div>
                <div class="form-group">
                    <label id="Modified Date" for="Modified Date">Modified Date</label>
                    <input id="Modified Date" class="form-control" type="text" name="updated_at" value="{{$report->updated_at}}" required>
                    </div>

          <div class="form-group">

          <button id="submit" type="submit">
            Submit</button>

          </div>

        </form>

      </main>

{{--
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
    </form> --}}
</body>
</html>
@endsection
