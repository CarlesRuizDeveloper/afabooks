@extends('layouts.plantilla')

@section('title', 'Añadir libro')

@section('content')
    <div class="max-w-md mx-auto my-8">
        <h1 class="text-2xl font-semibold mb-3 text-center">@yield('formTitle')</h1>
        <form action="@yield('formAction')" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="categoria">
                    Categoría:
                </label>
                <select name="IDCategoria" id="categoria" class="w-full p-2 border rounded" required>
                    <option value="" disabled selected>Selecciona una categoría</option>
                    <option value="1">Libros de texto</option>
                    <option value="2">Libros de lectura</option>
                </select>
                
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="curso">
                    Curso:
                </label>
                <select name="courseID" id="curso" class="w-full p-2 border rounded" required>
                    <option value="" disabled selected>Selecciona un curso</option>
                    @foreach($courses as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->titulo }}</option>
                    @endforeach
                </select>
                
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="codigo">
                    Código:
                </label>
                
                <input type="text" name="codigo" id="codigo" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">
                    Título:
                </label>
                <input type="text" name="descripcion" id="titulo" class="w-full p-2 border rounded">
                @error('descripcion')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="editorial">
                    Editorial:
                </label>
                <input type="text" name="marca" id="editorial" placeholder="No es obligatorio" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="observaciones">
                    Observaciones:
                </label>
                <textarea name="observaciones" id="observaciones" placeholder="No es obligatorio" class="w-full p-2 border rounded"></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-green-700 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    @yield('textButton')
                </button>
            </div>
        </form>
    </div>
@endsection