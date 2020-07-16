@extends('layout')
@section('title', 'crear proyecto')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-10 col-lg-6 mx-auto">
      <form
        class="bg-white py-3 px-4 shadow rounded"
        action="{{route('projectsResource.update', $project)}}"
        method="post">
        <h1>Editar proyecto</h1>
        @method('PATCH')

        @include('projects/_form', ['btnText' => 'Actualizar'])
      </form>

    </div>
  </div>
</div>

@endsection
