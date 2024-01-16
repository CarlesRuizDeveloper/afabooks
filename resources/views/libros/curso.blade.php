@extends('layouts.plantilla')

@section('title', 'AFA Intercanvi de llibres')

@section('content')

<h1 class="mb-2 mt-20 font-bold text-xl lg:text-2xl xl:text-3xl ml-4">Libros de texto</h1> 

<div class="flex flex-nowrap overflow-x-scroll"> 


    @foreach ($librosTexto as $libro)
        @if ($libro->IDCategoria == 1)
        <div class="min-w-[8rem] max-w-[12rem] rounded bg-blue-200 p-2 text-sm max-h-full flex flex-col mx-2 mb-4">
            <p class="mb-2 overflow-hidden font-bold">{{ $libro->descripcion }}</p>
                @foreach ($courses as $course)
                    @if ($course->id == $libro->courseID)
                    <p class="mb-2 overflow-hidden text-center">{{ $course->titulo }}</p>
                    @endif
                @endforeach
                <a href="{{ route('libros.show', $libro->id) }}" class="mt-auto block mx-auto p-1 bg-green-700 rounded-md text-center text-white w-3/4">
                    Ver detalles
                </a>
            </div>
        @endif
    @endforeach
</div>

<h1 class="mb-2 mt-3 font-bold text-xl lg:text-2xl xl:text-3xl ml-4">Libros de lectura</h1> 

<div class="flex flex-nowrap overflow-x-scroll"> 


    @foreach ($librosLectura as $libro)
        @if ($libro->IDCategoria == 2)
            <div class="min-w-[8rem] max-w-[18rem] rounded bg-pink-200 p-2 text-sm max-h-full flex flex-col mx-2 mb-4">
                <p class="mb-2 overflow-hidden font-bold">{{ $libro->descripcion }}</p>
                @foreach ($courses as $course)
                    @if ($course->id == $libro->courseID)
                        <p class="mb-2 overflow-hidden text-center">{{ $course->titulo }}</p>
                    @endif
                @endforeach
                <a href="{{ route('libros.show', $libro->id) }}" class="mt-auto block mx-auto p-1 bg-green-700 rounded-md text-center text-white w-3/4">
                    Ver detalles
                </a>
            </div>
        @endif
    @endforeach
</div>

@endsection
