@extends('layouts.plantilla')

@section('title', 'Ver libro')

@section('content')
    <div class="max-w-md mx-auto my-8">
        <h1 class="text-2xl font-semibold mb-3 text-center mt-24">Ver libro</h1>
        <div style="display: flex; justify-content: space-between;">
            <a class="bg-green-200 p-3 rounded-lg shadow-md mx-4 text-center mb-2" href="{{ route('libros.index')}} ">Volver a inicio</a>
        
            @if(Auth::check() && Auth::user()->id == $libro->userID)
                <a class="bg-green-200 p-3 rounded-lg shadow-md mx-4 text-center mb-2" href="{{ route('libros.edit', $libro)}}">Editar</a>
            @endif
        </div>
        

        <form action="{{ route('libros.update', $libro) }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('put')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="categoria">
                    Categoría:
                </label>
                <select name="IDCategoria" id="categoria" class="w-full p-2 border rounded" disabled>
                    <option value="" disabled>Selecciona una categoría</option>
                    <option value="1" {{ $libro->IDCategoria == 1 ? 'selected' : '' }}>Libros de texto</option>
                    <option value="2" {{ $libro->IDCategoria == 2 ? 'selected' : '' }}>Libros de lectura</option>
                </select>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="curso">
                    Curso:
                </label>
                <select name="courseID" id="curso" class="w-full p-2 border rounded" disabled>
                    <option value="" disabled>Selecciona un curso</option>
                    @foreach($courses as $curso)
                        <option value="{{ $curso->id }}" {{ $libro->courseID == $curso->id ? 'selected' : '' }}>{{ $curso->titulo }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="codigo">
                    Código:
                </label>
                <input type="text" name="codigo" id="codigo" placeholder="Este campo no es obligatorio" value="{{$libro->codigo }}" class="w-full p-2 border rounded" readonly>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">
                    Título:
                </label>
                <input type="text" name="descripcion" id="titulo" value="{{$libro->descripcion }}" class="w-full p-2 border rounded" readonly>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="editorial">
                    Editorial:
                </label>
                <input type="text" name="marca" id="editorial" value="{{$libro->marca }}" placeholder="Este campo no es obligatorio" class="w-full p-2 border rounded" readonly>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="observaciones">
                    Observaciones:
                </label>
                <textarea name="observaciones" id="observaciones" placeholder="Este campo no es obligatorio" class="w-full p-2 border rounded" readonly>{{$libro->observaciones }}</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="categoria">
                    Estado:
                </label>
                <select name="estado" id="estado" class="w-full p-2 border rounded" disabled>
                    <option value="" disabled>Selecciona un estado</option>
                    <option value="disponible" {{ $libro->estado == "disponible" ? 'selected' : '' }}>Disponible</option>
                    <option value="solicitado" {{ $libro->estado == "solicitado" ? 'selected' : '' }}>Solicitado</option>
                    <option value="entregado" {{ $libro->estado == "entregado" ? 'selected' : '' }}>Entregado</option>
                </select>
            </div>
        </form>

    </div>
@endsection
