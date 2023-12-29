@extends('layouts.plantilla')

@section('title',  $libro->codigo)

@section('content')
    <h1>este es el libro: {{$libro->codigo}}</h1>
@endsection

