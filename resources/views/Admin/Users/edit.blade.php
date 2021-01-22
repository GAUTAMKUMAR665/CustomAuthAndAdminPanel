@extends('Admin.panel')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
</head>
<body>
    <main class="container">
        <header class="header text-center">
      <h1 id="title">Survey Form</h1>

     {{--  <p id="description">Thank you for taking out a few minutes to fill out this form.</p> --}}
        </header>
        <form id="survey-form" action="/api/edit/user" method="Post">
            <input class="form-control" type="hidden" name='id' value="{{ $users->id }}">

          <div class="form-group">
          <label id="name-label" for="name">Name</label>
          <input class="form-control" type="text" name="name" value="{{ $users->name}}">
          </div>
          <div class="form-group">
          <label id="email-label" for="email">Email</label>
          <input class="form-control" type="text" name="email" value="{{ $users->email }}">
          </div>
          <div class="form-group">
            <label id="name-label" for="phone">Phone</label>
            <input class="form-control" type="text" name="phone" value="{{ $users->phone }}">
            </div>
            <div class="form-group">
            <label id="email-label" for="is_verified">Is Verified</label>
            <input class="form-control" type="text" name="is_verified" value="{{ $users->is_verified }}">
            </div>
            <div class="form-group">
                <label id="name-label" for="verfication_method">Verification Method</label>
                <input class="form-control" type="text" name="verification_method" value="{{ $users->verification_method }}">
                </div>

          <div class="form-group">

          <button id="submit" type="submit">
            Submit</button>

          </div>

        </form>

      </main>

</body>
</html>




{{-- <form action="/api/edit/user" method="Post" >
    <input class="form-control" type="hidden" name='id' value="{{ $users->id }}">
    <input class="form-control" type="text" name="name" value="{{ $users->name}}">
    <input class="form-control" type="text" name="email" value="{{ $users->email }}">
    <input class="form-control" type="text" name="phone" value="{{ $users->phone }}">
   <input class="form-control" type="text" name="is_verified" value="{{ $users->is_verified }}">
   <input class="form-control" type="text" name="verification_method" value="{{ $users->verification_method }}">
   <input class="form-control" type="submit" value="submit">
 @csrf
</form> --}}

@endsection
