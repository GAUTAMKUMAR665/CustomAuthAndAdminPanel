@extends('Admin.home');


@section('content')

{{-- @include('Admin.impots') --}}
<section>
    <form action="postcsv" method="post" enctype="multipart/form-data" id="formid">
        <input type="file" name="csvfile" id="csvid">
        <input type="submit" value="submit" id='subinput'>
       @csrf
    </form>
</section>
@endsection
