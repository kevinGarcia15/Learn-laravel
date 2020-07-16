@extends('layout')
@section('title', $findProjectId->title)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
      <div class="bg-white p-5 shadow rounded">
        <h2>{{$findProjectId->title}}</h2>
        <p class="text-secondary">{{$findProjectId->description}}</p>
        <p class="text-black-50">{{$findProjectId->created_at->diffForHumans()}}</p>
        <div class="d-flex justify-content-between align-item-center">
          <a class="btn btn-secundary" href="{{route('projectsResource.index')}}">
            Regresar
          </a>
          <div class="">
            <a class="btn btn-primary" href="{{route('projectsResource.edit', $findProjectId)}}">
              Editar proyecto
            </a>
            <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">
              Eliminar
            </a>
            <form id="delete-project" action="{{route('projectsResource.destroy', $findProjectId)}}" method="post">
              @csrf
              @method('DELETE')
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
