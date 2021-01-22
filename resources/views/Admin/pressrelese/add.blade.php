@extends('Admin.panel')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
    <title>ADD Press Release</title>

</head>
<body>
    <main class="container">
        <header class="header text-center">
      <h1 id="title">Survey Form</h1>

 {{--      <p id="description">Thank you for taking out a few minutes to fill out this form.</p> --}}
        </header>
        <form id="survey-form" action="/api/add/pressrelease" method="post">
            <div class="form-group">
                <label id="name-label" for="name">Name</label>
                <input id="name"  class="form-control" type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                <label id="email-label" for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email" placeholder="example@web.com" required>
                </div>
                <div class="form-group">
                  <label id="phone" for="phone">Phone</label>
                  <input id="phone" class="form-control" type="number" name="phone" placeholder="phone" required>
                  </div>

          <div class="form-group">
            <label id="textarea" for="textarea">Message</label>
          <textarea id="textarea"  name="message"></textarea>
            </div>
          <div class="form-group">

          <button id="submit" type="submit">
            Submit</button>

          </div>
@csrf
        </form>

      </main>


  {{--   <form action="/api/add/pressrelease" method="post">
        <label for="name">Enter Publisher Name</label>
        <input type="text" name="name" id="name">
        <label for="email">Enter publisher Email</label>
        <input type="text" name="Slug" id="Slug">
        <label for="phone">Enter publisher Phone.No</label>
        <input type="text" name="phone" id="phone">
        <label for="message">Enter Publisher Message </label>
        <textarea type="text" name="message" id="message"></textarea>
        <input type="submit" value="submit">
@csrf
    </form> --}}
</body>
</html>

@endsection
