@extends('layout')
@section('title', $findProjectId->title)
@section('content')
  <h2>{{$findProjectId->title}}</h2>
  <a href="{{route('projectsResource.edit', $findProjectId)}}">Editar proyecto</a>
  <p>{{$findProjectId->description}}</p>
  <p>{{$findProjectId->created_at->diffForHumans()}}</p>
@endsection
