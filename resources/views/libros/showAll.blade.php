@extends('layouts.plantilla')

@section('title', 'Ver todos los libros de texto')

@section('content')
<div class="mt-50 mb-20">
    <a href="{{ route('libros.index')}}">Volver a inicio</a>

    <div class="w-100 flex mx-auto my-24 overflow-x-scroll">
        
        <h1 class="text-2xl font-semibold mb-3 text-center mt-24">Libros de Texto</h1>

        @foreach ($librosTexto as $libro)
            @if ($libro->IDCategoria == 1)
            
            <div class="rounded flex-none bg-blue-200 mx-2 sm:mx-4 md:mx-6 lg:mx-8 xl:mx-10 p-1 w-32 text-sm sm:text-base md:text-base lg:text-base xl:text-base max-h-full flex flex-col">
                <p class="ml-1 block mb-0.5 h-12 overflow-hidden font-bold">{{ $libro->descripcion }}</p>
            
            @foreach ($courses as $course)
                @if ($course->id == $libro->courseID)
                <p  class="block mb-0.5 h-6 overflow-hidden text-center">{{ $course->titulo }}</p>
                @endif
            @endforeach
            
            <a href="{{ route('libros.show', $libro->id) }}" class="mt-auto block mx-auto mb-0.5 p-1 bg-green-700 rounded-md text-center text-white md:w-3/4">
                Ver detalles
            </a>
            
        </div>
    @endif
    @endforeach

    </div>
</div>
@endsection
