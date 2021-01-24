@extends('Admin.panel')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
    <title>Edit publiser</title>


</head>
<body>
    <main class="container">
    {{--     @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
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
      <h1 id="title">Survey Form</h1>

     {{--  <p id="description">Thank you for taking out a few minutes to fill out this form.</p> --}}
        </header>
        <form id="survey-form" action="/api/edit/publiser" method="post" >
            <div class="form-group">
                <label id="name-label" for="PID">Publisher Id</label>
                <input id="PID"  class="form-control" type="text" name="publisher_id" value="{{$publiser->id}}" >
                </div>
          <div class="form-group">
          <label id="name-label" for="name">Name</label>
          <input id="name"  class="form-control" type="text" name="name" value="{{$publiser->name}}" >
          </div>
          <div class="form-group">
          <label id="email-label" for="email">Email</label>
          <input id="email" class="form-control" type="email" name="email" value="{{$publiser->email}}" >
          </div>
          <div class="form-group">
            <label id="phone" for="phone">Phone</label>
            <input id="phone" class="form-control" type="text" name="phone" value="{{$publiser->phone}}" >
            </div>
            <div class="form-group">
                <label id="name-label" for="URL">URL</label>
                <input id="URL"  class="form-control" type="text" name="url" value="{{$publiser->URL}}" >
                </div>


          <button id="submit" type="submit">
            Submit</button>

          </div>
          @csrf
        </form>

      </main>

{{--
    <form action="/api/edit/publiser" method="post">
        <input type="hidden" value="{{ $publiser->id }}" name='id'>
        <label for="name">NAME</label>
        <input type="text" name="name" id="name" value="{{$publiser->name}}">
        <label for="email">EMAIL</label>
        <input type="text" name="email" id="email" value="{{$publiser->email}}">
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phoneL" value="{{ $publiser->phone }}">
        <label for="message">Message</label>
        <textarea  name="message" id="message" value="{{ $publiser->message}}" rows="4"></textarea>

        <input type="submit" value="submit" >
@csrf
    </form> --}}
</body>
</html>

@endsection
