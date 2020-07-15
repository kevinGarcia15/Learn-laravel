@extends('layout')
@section('title', 'crear proyecto')
@section('content')
  <h1>Crear proyecto</h1>
  <form
    class=""
    action="{{route('projectsResource.store')}}"
    method="post">

    @include('projects/_form', ['btnText' => 'Guardar'])
  </form>
@endsection
