@extends('layout')
@section('title', 'home')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 col-lg-6">
      <h1 class="display-4 text-primary">Aprendiendo Laravel</h1>
      <p class="lead text-secondary">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
        it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
        Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
        <a class="btn btn-lg btn-primary" href="{{route('contact')}}">Contactame</a>
        <a class="btn btn-lg btn-outline-primary" href="{{route('projectsResource.index')}}">Portafolio</a>
    </div>
    <div class="col-12 col-lg-6">
      <img class="img-fluid mb-4" src="./img/home.svg" alt="Home">
    </div>
  </div>
</div>
@endsection
