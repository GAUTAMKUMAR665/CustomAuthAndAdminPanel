@extends('Admin.home');
@section('content')
    <form action="postcsv" method="post" enctype="multipart/form-data" id="formid">
        <input type="file" name="csvfile" id="csvid">
        <input type="submit" value="submit" id='subinput'>
       @csrf
    </form>
@endsection