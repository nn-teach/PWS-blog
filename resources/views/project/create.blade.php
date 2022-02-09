@extends('layout')

@section('content')
  <h1>Project - Créer un nouveau projet</h1>
  <form method="POST" action="/project">
    @csrf
    <div>
      <input type="text" name="title" placeholder="Titre du projet">
    </div>
    <div>
      <textarea name="description" placeholder="Description du projet"></textarea>
    </div>
    <div>
      <button type="submit">Créer le projet</button>
    </div>
  </form>
@endsection
