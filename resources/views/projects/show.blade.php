@extends('layout')
@section('title', $findProjectId->title)
@section('content')
  <h2>{{$findProjectId->title}}</h2>
  <p>{{$findProjectId->description}}</p>
  <p>{{$findProjectId->created_at->diffForHumans()}}</p>
@endsection
