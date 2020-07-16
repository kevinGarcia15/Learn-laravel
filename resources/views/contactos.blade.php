@extends('layout')
@section('title', 'contactos')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
          <form class="bg-white shadow rounded py-3 px-4" action="{{route('contactStore')}}" method="post">
            <h1>Contacto</h1>
            @csrf<!--Colocar esta directiva siempre en todos los forms-->
            <div class="form-group">
              <label for="name">Nombre</label>
              <input
              id="name"
              class="form-control {{$errors->first('nombre','is-invalid')}}"
              type="text"
              name="nombre"
              placeholder="Nombre..."
              value="{{old('nombre')}}">
              {!! $errors->first('nombre', '<span class="invalid-feedback" role="alert"><strong>:message</strong></span>')!!}
            </div>
            <div class="form-group">
              <label for="name">Email</label>
              <input
              class="form-control {{$errors->first('email','is-invalid')}}"
              type="email"
              placeholder="Email..."
              name="email"
              value="{{old('email')}}">
              {!! $errors->first('email', '<span class="invalid-feedback" role="alert"><strong>:message</strong></span>')!!}
            </div>
            <div class="form-group">
              <label for="name">Asunto</label>
              <input
              class="form-control {{$errors->first('subject','is-invalid')}}"
              type="text"
              name="subject"
              placeholder="Asunto..."
              value="{{old('subject')}}">
              {!! $errors->first('subject', '<span class="invalid-feedback" role="alert"><strong>:message</strong></span>')!!}
            </div>

            <div class="form-group">
              <label for="name">Mensaje</label>
              <textarea
              class="form-control {{$errors->first('content','is-invalid')}}"
              name="content"
              rows="8"
              cols="80"
              placeholder="Mensaje">
              {{old('content')}}
            </textarea>
            {!! $errors->first('content', '<span class="invalid-feedback" role="alert"><strong>:message</strong></span>')!!}
          </div>
          <button class="btn btn-primary "type="submit" name="button">ENVIAR</button>
        </form>
        </div>
    </div>
  </div>
@endsection
