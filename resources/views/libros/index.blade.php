@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
<div class="hidden md:block bg-green-200 p-6 rounded-lg shadow-md mx-auto my-2 text-center w-2/3 mt-4 mb-4">
    <p class="text-gray-700">
        Gracias por unirte a nuestra campaña para reciclar libros. Cada libro que reciclas contribuye a construir un futuro más sostenible.
        <br>
        AFA Vedruna Gràcia
    </p>
</div>


    <div class="md:hidden bg-green-200 p-6 rounded-lg shadow-md mx-4 my-2 text-center">
        <p class="text-gray-700">
            Gracias por unirte a nuestra campaña para reciclar libros. Cada libro que reciclas contribuye a construir un futuro más sostenible.
            <br>
            AFA Vedruna Gràcia
        </p>
    </div>

    <div class="hidden md:block">
        <!-- Visible solo en pantallas medianas y grandes -->
        <a href="{{ route('libros.create') }}" class="block mx-auto mb-4 p-2 bg-green-700 rounded-md text-center text-white md:w-1/4">
            Donar libros
        </a>
    </div>
    <a href="{{ route('libros.create') }}" class="block mx-auto mb-4 p-2 bg-green-700 rounded-md text-center text-white md:hidden w-1/3">
        Donar libros
    </a>
    <h1 class="mb-2 font-bold text-xl lg:text-2xl xl:text-3xl">Libros de texto</h1> 

    <div class="flex flex-nowrap overflow-x-scroll">        
        <a href="{{ route('libros.create') }}" class="block mx-auto mb-4 p-2 bg-green-700 rounded-md text-center text-white md:w-1/4 sm:w-full sm:max-w-xs">
            Ver todos
        </a>
    
        @foreach ($libros->take(8) as $libro)
            <div class="flex-none bg-orange-300 mx-2 sm:mx-4 md:mx-6 lg:mx-8 xl:mx-10 p-4 w-32 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl max-h-full">
                <a href="{{ route('libros.show', $libro->codigo) }}" class="block mb-2">{{ $libro->id }}</a>
                <a href="{{ route('libros.show', $libro->codigo) }}" class="block mb-2">{{ $libro->codigo }}</a>
                <a href="{{ route('libros.show', $libro->codigo) }}" class="block mb-2">{{ $libro->id }}</a>
                <a href="{{ route('libros.show', $libro->codigo) }}" class="block mb-2">{{ $libro->codigo }}</a>
            </div>
        @endforeach
    </div>
    <h1 class="mb-2 mt-3 font-bold text-xl lg:text-2xl xl:text-3xl">Libros de lectura</h1> 

    <div class="flex flex-nowrap overflow-x-scroll">        
        <a href="{{ route('libros.create') }}" class="block mx-auto mb-4 p-2 bg-green-700 rounded-md text-center text-white md:w-1/4 sm:w-full sm:max-w-xs">
            Ver todos
        </a>
    
        @foreach ($libros->take(8) as $libro)
            <div class="flex-none bg-orange-300 mx-2 sm:mx-4 md:mx-6 lg:mx-8 xl:mx-10 p-4 w-32 text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl max-h-full">
                <a href="{{ route('libros.show', $libro->codigo) }}" class="block mb-2">{{ $libro->id }}</a>
                <a href="{{ route('libros.show', $libro->codigo) }}" class="block mb-2">{{ $libro->codigo }}</a>
                <a href="{{ route('libros.show', $libro->codigo) }}" class="block mb-2">{{ $libro->id }}</a>
                <a href="{{ route('libros.show', $libro->codigo) }}" class="block mb-2">{{ $libro->codigo }}</a>
            </div>
        @endforeach
    </div>
    

    
@endsection
