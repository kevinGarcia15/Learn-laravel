@extends('layout')
@section('title', 'contactos')
@section('content')
  <h1>Contactos</h1>
  <form class="" action="{{route('contactStore')}}" method="post">
    @csrf<!--Colocar esta directiva siempre en todos los forms-->
    <input
      type="text"
      name="nombre"
      placeholder="Nombre..."
      value="{{old('nombre')}}"><br>
    {!! $errors->first('nombre', '<small>:message</small><br>')!!}

    <input
      type="email"
      placeholder="Email..."
      name="email"
      value="{{old('email')}}"><br>
    {!! $errors->first('email', '<small>:message</small><br>')!!}

    <input
      type="text"
      name="subject"
      placeholder="Asunto..."
      value="{{old('subject')}}"><br>
    {!! $errors->first('subject', '<small>:message</small><br>')!!}

    <textarea
      name="content"
      rows="8"
      cols="80"
      placeholder="Mensaje">
      {{old('content')}}
    </textarea><br>
    {!! $errors->first('content', '<small>:message</small><br>')!!}

    <button type="submit" name="button">ENVIAR</button>
  </form>
@endsection
