@extends('layout')
@section('title', 'Proyectos')
@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center">
    <h1>Proyectos</h1>
    <a href="{{route('projectsResource.create')}}">crear proyecto</a>
  </div>
  <ul class="list-group">
    @forelse($projects as $portafolio)
    <li class="list-group-item border-0 mb-3 shadow-sm">
      <a href="{{route('projectsResource.show', $portafolio)}}" class="d-flex justify-content-between">
        <span>
          {{$portafolio->title}}
        </span>
        <span>
          {{$portafolio->created_at->format('d/m/y')}}
        </span>
      </a>
    </li>
    @empty
    <li class="list-group-item border-0 mb-3 shadow-sm">
      No hay datos por mostrar
    </li>
    @endforelse
    {{$projects->links()}}
  </ul>
</div>
@endsection
