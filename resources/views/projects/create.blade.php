@extends('layout')
@section('title', 'crear proyecto')
@section('content')
  <h1>Crear proyecto</h1>
  <form class="" action="{{route('projects.store')}}" method="post">
    @csrf
    <label for="">
      Titulo del proyecto <br>
      <input type="text" name="title" value="">
    </label>
    <br>
    <label for="">
      Descripcion <br>
      <textarea name="description" rows="8" cols="80"></textarea>
    </label>
    <br>
    <button type="submit" name="save">Crear</button>
  </form>

@endsection
