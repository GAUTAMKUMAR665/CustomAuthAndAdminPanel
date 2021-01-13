<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit publiser</title>
<style>
    input{
        position: relative;
        width:100%;
        height: 30px;
        border-radius: 15px;
        outline: none;
        border-color:#000080;
    }
    input[type='submit']{
        width: 30%;
        margin-top: 10px;
        left:390px;
    }
</style>

</head>
<body>
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
    </form>
</body>
</html>
