@extends('Admin.panel')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD Catogery Form</title>
    {{-- <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script> --}}
    <style href="{{ 'css/form.css' }}"></style>


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
      <h2 id="title">ADD Catogery</h2>
{{--
      <p id="description">Thank you for taking out a few minutes to fill out this form.</p> --}}
        </header>
        <form id="survey-form" action="/api/add/catogery" method="POST">
          <div class="form-group">
          <label id="name-label" for="name">Catogery ID</label>
          <input id="catogery_id"  class="form-control" type="text" name="catogery_id" placeholder="Catogery ID" >
          </div>
          <div class="form-group">
          <label id="catogery_name" for="catogery_name">Catogery Name</label>
          <input id="catogery_name" class="form-control" type="text" name="catogery_name" placeholder="Catogery Name" >
          <div class="form-group">
            <label id="slug" for="slug">Slug</label>
            <input id="slug" class="form-control" type="text" name="catogery_slug" placeholder=" Catogery Slug" >
          </div>

          <div class="form-group">

          <button id="submit" type="submit">
            Submit</button>

          </div>
@csrf
        </form>

      </main>



  {{--   <form action="/api/add/catogery" method="post">
        <label for="catogery_id">Enter Catogery Id</label>
        <input type="text" name="catogery_id" id="catogery_id">
        <label for="catogery_name">Enter Catogery Name</label>
        <input type="text" name="catogery_name" id="catogery_name">
        <label for="Slug">Enter A Slug</label>
        <input type="text" name="catogery_slug" id="Slug">
        <input type="submit" value="submit">
@csrf
    </form> --}}
</body>
</html>

@endsection
