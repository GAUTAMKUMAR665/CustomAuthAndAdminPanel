@extends('Admin.adminpanel')

@section('content')

<form action="/api/add/user" method="Post" >

    <input type="text" name="name" placeholder="enter your name">
    <input type="text" name="email" placeholder="enter your email">
    <input type="text" name="phone" placeholder="enter your phone">
    <input type="text" name="password" placeholder="enter a password">
    <input type="text" name="confirmpassword" placeholder="enter a confirmpassword">
    <select name="is_verified" >
        <option value="1">TURE</option>
        <option value="0">FALSE</option>
    </select>
    <select name="verfication_method" >
        <option value="phone">PHONE</option>
        <option value="email">EMAIL</option>
    </select>
    <input type="submit" value="submit">
 @csrf
</form>

@endsection
