@extends('layout')

@section('title')
 웰컴 
@endsection


@section('content')
 <span style="color:red">웰컴자리</span>
 <br><br> 
 <ul>
    @foreach($books as $book)
        <li>{{$book}}</li>
    @endforeach
 </ul> 
@endsection