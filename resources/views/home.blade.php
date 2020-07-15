@extends('layout')
@section('title', 'home')
@section('content')
  <p>este es el contenido de la pagina</p>
  {{auth()->user()->name}}
@endsection
