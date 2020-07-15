@extends('layout')
@section('title', $findProjectId->title)
@section('content')
  <h2>{{$findProjectId->title}}</h2>
  <a href="{{route('projectsResource.edit', $findProjectId)}}">Editar proyecto</a>
  <form
    class=""
    action="{{route('projectsResource.destroy', $findProjectId)}}"
    method="post">
    @csrf @method('DELETE')
    <button>Eliminar</button>
  </form>
  <p>{{$findProjectId->description}}</p>
  <p>{{$findProjectId->created_at->diffForHumans()}}</p>
@endsection
