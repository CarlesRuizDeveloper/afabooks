@extends('layouts.plantillaForm')

@section('title', 'Añadir libro')

@section('form')

    @section('formTitle', 'Publicar libro')

    @section('formAction', route('libros.store'))

    @section('textButton', 'Publicar')

@endsection
