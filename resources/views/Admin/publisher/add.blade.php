@extends('Admin.panel')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
    <title>ADD Publisher</title>

</head>
<body>
    <main class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! Session::get('success') !!}</li>
        </ul>
    </div>
@endif


        <header class="header text-center">
      <h1 id="title">ADD Publisher</h1>

 {{--      <p id="description">Thank you for taking out a few minutes to fill out this form.</p> --}}
        </header>
        <form id="survey-form" action="/api/add/publiser" method="post">
            <div class="form-group">
                <label id="name-label" for="publisher_id">Publisher Id</label>
                <input id="publisher_id"  class="form-control" type="text" name="publisher_id" placeholder="Publiser Id" >
                </div>
            <div class="form-group">
                <label id="name-label" for="name">Name</label>
                <input id="name"  class="form-control" type="text" name="name" placeholder="Full Name" >
                </div>
                <div class="form-group">
                <label id="email-label" for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email" placeholder="example@web.com" >
                </div>
                <div class="form-group">
                  <label id="phone" for="phone">Phone</label>
                  <input id="phone" class="form-control" type="text" name="phone" placeholder="phone" >
                  </div>
                  <div class="form-group">
                    <label id="url" for="url">URL</label>
                    <input id="url" class="form-control" type="text" name="url" placeholder="URL" >
                    </div>

          <div class="form-group">

          <button id="submit" type="submit">
            Submit</button>

          </div>
@csrf
        </form>

      </main>



   {{--  <form action="/api/add/publiser" method="post">
        <label for="publisher_id">Publisher_Id</label>
        <input type="text" name="publisher_id" id="publisher_id" >
        <label for="name">NAME</label>
        <input type="text" name="name" id="name" >
        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email" >
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phoneL" >
        <label for="url">URL</label>
        <input  name="url" id="url"></input>

        <input type="submit" value="submit" >
@csrf
    </form> --}}
</body>
</html>

@endsection
