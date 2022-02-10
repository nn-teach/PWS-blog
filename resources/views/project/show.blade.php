@extends('layout')

@section('content')
  <h1>Project - {{$project->title}}</h1>
  <p>{{$project->description}}</p>
  <p>Chef de projet: {{$project->user->name}}</p>
@endsection
