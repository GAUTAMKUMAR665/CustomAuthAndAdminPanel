@extends('Admin.panel')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User Form</title>
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

@if (Session::has('Success'))
<div class="alert alert-success">
    <ul>
        <li class="alert alert-success">{{Session::get('success')}}</li>
    </ul>
</div>

@endif
        <header class="header text-center">
      <h1 id="title">Add User </h1>
    {{--
      <p id="description">Thank you for taking out a few minutes to fill out this form.</p> --}}
        </header>
        <form id="survey-form" action="/api/add/user" method="Post">
          <div class="form-group">
          <label id="name-label" for="name">Name</label>
        <input class="form-control" type="text" name="name" placeholder="enter your name">
          </div>
          <div class="form-group">
          <label id="email-label" for="email">Email</label>
          <input class="form-control" type="text" name="email" placeholder="enter your email">
          </div>
          <div class="form-group">
            <label id="name-label" for="name">Phone</label>
            <input class="form-control" type="text" name="phone" placeholder="enter your phone">
            </div>
            <div class="form-group">
            <label id="email-label" for="email">Password</label>
            <input class="form-control" type="text" name="password" placeholder="enter a password">
            </div>
            <div class="form-group">
                <label id="name-label" for="name">Confirm Password</label>
                <input class="form-control" type="text" name="confirmpassword" placeholder="re-enteryour password">
                </div>
                <div class="form-group">
                    <select id="dropdown" class="form-control" name="is_verified">
                      <option disabled selected value>Is User Verified </option>
                      <option value="1">TURE</option>
                      <option value="0">FALSE</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <select id="dropdown"  class="form-control" name="verfication_method" >
                          <option disabled selected value>Verification Method </option>
                          <option value="phone">PHONE</option>
                          <option value="email">EMAIL</option>
                        </select>
                        </div>
          <div class="form-group">

          <button id="submit" type="submit">
            Submit</button>

          </div>

        </form>

      </main>

</body>
</html>




{{-- <form action="/api/add/user" method="Post" >

    <input class="form-control" type="text" name="name" placeholder="enter your name">
    <input class="form-control" type="text" name="email" placeholder="enter your email">
    <input class="form-control" type="text" name="phone" placeholder="enter your phone">
    <input class="form-control" type="text" name="password" placeholder="enter a password">
    <input class="form-control" type="text" name="confirmpassword" placeholder="enter a confirmpassword">
    <select name="is_verified" >
        <option value="1">TURE</option>
        <option value="0">FALSE</option>
    </select>
    <select name="verfication_method" >
        <option value="phone">PHONE</option>
        <option value="email">EMAIL</option>
    </select>
    <input class="form-control" type="submit" value="submit">
 @csrf
</form>
 --}}
@endsection
