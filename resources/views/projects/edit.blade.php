@extends('layout')
@section('title', 'crear proyecto')
@section('content')
  <h1>Editar proyecto</h1>
  <form class="" action="{{route('projectsResource.update', $project)}}" method="post">
    @csrf @method('PATCH')
    <label for="">
      Titulo del proyecto <br>
      <input type="text" name="title" value="{{old('title',$project->title)}}">
      {!! $errors->first('title', '<small>:message</small><br>')!!}
    </label>
    <br>
    <label for="">
      Descripcion <br>
      <textarea name="description" rows="8" cols="80">{{old('description',$project->description)}}</textarea>
      {!! $errors->first('description', '<small>:message</small><br>')!!}
    </label>
    <br>
    <button type="submit" name="save">Actualizar</button>
  </form>

@endsection
