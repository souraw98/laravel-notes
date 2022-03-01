@extends('layout.master')

@section('content')
<form action="{{url('post/store')}}" method="post">
        @csrf
        Title: <br>
        <input type="text" name="title"><br>
        Description:<br>
        <textarea name="description"></textarea>
        <br><br>
        <input type="submit" value="submit">

</form>
@endSection