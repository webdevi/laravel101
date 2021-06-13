@extends('layout')

@section('title')
 프로젝트 
@endsection


@section('content')
 <h2><span style="color:green">project list  </span></h2>
 <Br>

   @foreach ($projects as $project )
    <p>
    Title : {{ $project->title }} <Br>
    description : {{ $project->description }}
    </p>
   @endforeach
@endsection