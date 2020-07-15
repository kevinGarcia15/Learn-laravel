@extends('layout')
@section('title', 'home')
@section('content')
  <h1>Proyectos</h1>
  <a href="{{route('projectsResource.create')}}">crear proyecto</a>
  <ul>
    @forelse($projects as $portafolio)
      <li><a href="{{route('projects.show', $portafolio)}}">{{$portafolio->title}}</a></li>
    @empty
      <li>No hay datos por mostrar</li>
    @endforelse
  </ul>

  <ul>
    @forelse($projects2 as $portafolio)
    <li>{{$portafolio->title}}</li>
    @empty
    <li>No hay datos por mostrar</li>
    @endforelse
    {{$projects2->links()}}
  </ul>
@endsection
