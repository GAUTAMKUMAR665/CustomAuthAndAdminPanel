@extends('Admin.panel')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Press-Release Form</title>

</head>
<body>
    <main class="container">

        @if ($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger">{{$alert}}</li>
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
      <h1 id="title">Update Press-Release</h1>

     {{--  <p id="description">Thank you for taking out a few minutes to fill out this form.</p> --}}
        </header>
        <form id="survey-form">
          <div class="form-group">
          <label id="name-label" for="name">Name</label>
          <input id="name"  class="form-control" type="text" name="name" placeholder="Full Name" required>
          </div>
          <div class="form-group">
          <label id="email-label" for="email">Email</label>
          <input id="email" class="form-control" type="email" name="email" placeholder="example@web.com" required>
          </div>
          <div class="form-group">

            <label id="number-label" for="number" >Age <span class="tip">(Optional)</span> </label>
          <input id="number" class="form-control" type="number" min="10" max="99" name="age" placeholder="Age">
          </div>
          <div class="form-group">
          <p>How far do you intend to go with your learning?</p>
          <select id="dropdown" name="Learning-goals" class="form-control">
            <option disabled selected value>Choose an option</option>
            <option value="All the Way">All the Way</option>
            <option value="Preliminary Level">Preliminary Level</option>
            <option value="Intermediate Level">Intermediate Level </option>
          </select>
          </div>
          <div class="form-group">
          <p>Are you getting as much help as you need?</p>

           <label>
            <input class="input-radio" type="radio" name="help" value="Yes" /> Yes
          </label>
          <label>
            <input class="input-radio" type="radio" name="help" value="No" /> No
          </label>
          <label>
            <input class="input-radio" type="radio" name="help" value="May-be" /> May Be
          </label>
          </div>
          <div class="form-group">
          <p>What do you think you will have to do to get better? <span class="tip">(select all that apply)</span></p>
          <label>
            <input type="checkbox" class="input-checkbox" name="growth-path" value="Buy more Courses" /> Buy more courses
          </label>
          <label>
            <input type="Checkbox" class="input-checkbox" name="growth-path" value="try more projects" /> Try More Projects
          </label>
         <label>
            <input type="checkbox"  class="input-checkbox" name="growth-path" value="Attend More Meetups" /> Attend More Meetups
          </label>
          </div>


          <div class="form-group">

          <textarea id="textarea"  name="textarea">Additional Comments</textarea>
            </div>
          <div class="form-group">

          <button id="submit" type="submit">
            Submit</button>

          </div>

        </form>

      </main>


      <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
    <form action="/api/edit/pressrelease" method="post">
        <input type="hidden" value="{{ $report->id }}" name='id'>
        <label for="Meta_Title">Meta_Title</label>
        <input type="text" name="Meta_Title" id="Meta_Title" value="{{$report->Meta_Title}}">
<label for="Added Date"></label>
<input type="text" name="created_at" id="Added Date" value="{{$report->created_at}}">
<label for="Modified Date"></label>
<input type="text" name="updated_at" id="Meta_Title" value="{{$report->updated_at}}">
        <input type="submit" value="submit" >
@csrf
    </form>
</body>
</html>
@endsection
