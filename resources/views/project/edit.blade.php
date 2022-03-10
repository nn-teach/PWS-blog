@extends('layout')

@section('content')
  <h1>Project - Modifier un nouveau projet</h1>
  <form method="POST" action="/project/{{$project->id}}">
    @method('PUT')
    @csrf
    <div>
      @error('title')
      <p style="color:red">{{$errors->first('title')}}</p>
      @enderror
      <input @error('title') style="border-color:red" @enderror type="text" name="title" placeholder="Titre du projet" value="{{$project->title}}">
    </div>
    <div>
      <textarea name="description" placeholder="Description du projet">
{{$project->description}}
      </textarea>
    </div>
    <div>
      <button type="submit" class="button">Modifier le projet</button>
    </div>
  </form>
@endsection
