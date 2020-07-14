@extends('layout')
@section('title', 'home')
@section('content')
  <ul>
    @forelse($data as $portafolio)
    <li>{{$portafolio['title']}}</li>
    @empty
    <li>No hay datos por mostrar</li>
    @endforelse
  </ul>
@endsection
