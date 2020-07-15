@extends('layout')
@section('title', 'crear proyecto')
@section('content')
  <h1>Editar proyecto</h1>
  <form
    class=""
    action="{{route('projectsResource.update', $project)}}"
    method="post">
    @method('PATCH')

    @include('projects/_form', ['btnText' => 'Actualizar'])
  </form>

@endsection
