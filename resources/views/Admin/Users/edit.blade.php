@extends('Admin.adminpanel')

@section('content')

<form action="/api/edit/user" method="Post" >
    <input type="hidden" name='id' value="{{ $users->id }}">
    <input type="text" name="name" value="{{ $users->name}}">
    <input type="text" name="email" value="{{ $users->email }}">
    <input type="text" name="phone" value="{{ $users->phone }}">
   <input type="text" name="is_verified" value="{{ $users->is_verified }}">
   <input type="text" name="verification_method" value="{{ $users->verification_method }}">
   <input type="submit" value="submit">
 @csrf
</form>

@endsection
