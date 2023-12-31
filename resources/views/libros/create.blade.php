@extends('layouts.plantilla')

@section('title', 'Añadir libro')

@section('content')
    <h1>aqui creamos libro</h1>
    <form>
        <label>
            Categoria:
            <input type="text" name="IDCategoria">
        </label>
        <label>
            Curso:
            <input type="text" name="courseID">
        </label>
        <label>
            Título:
            <input type="text" name="descripcion">
        </label>
        <label>
            Editorial:
            <input type="text" name="marca">
        </label>
        <label>
            Observaciones:
            <textarea type="text" name="observaciones"></textarea>
        </label>
    </form>
@endsection
