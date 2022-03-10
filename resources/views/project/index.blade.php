@extends('layout')

@section('content')
  <h1>Project</h1>
  <ul>
    @foreach ($projects as $project)
      <li>
	<a href="/project/{{$project->id}}">{{ $project->title }}</a>
	<a href="/project/{{$project->id}}/edit">Editer le projet</a>
      </li>
    @endforeach
  </ul>

  <div>
    <a href="/project/create" class="button">Créer un nouveau projet</a>
  </div>
@endsection
