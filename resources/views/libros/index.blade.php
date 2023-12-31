@extends('layouts.plantilla')


@section('title', 'Home')

@section('content')
<div class="max-w-screen-sm mx-auto ">
    <div class="hidden md:block bg-green-200 p-6 rounded-lg shadow-md mx-auto my-2 text-center w-2/3 mt-4 mb-4">
        <p class="text-gray-700">
            Muchas Gracias por unirte a nuestra campaña para rutilizar libros.
            <br>
            AFA Vedruna Gràcia
        </p>
    </div>
    <div class="md:hidden bg-green-200 p-3 rounded-lg shadow-md mx-4 my-2 text-center">
        <p class="text-gray-700">
            Muchas Gracias por unirte a nuestra campaña para rutilizar libros.
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

    <h1 class="mb-2 mt-3 font-bold text-xl lg:text-2xl xl:text-3xl ml-4">Libros de texto</h1> 
    <div class="flex flex-nowrap overflow-x-scroll">  
        <div class="mt-10">      
            <a href="{{ route('libros.create') }}" class="h-auto block mx-auto mb-4 p-2 lg:p-4 bg-green-700 rounded-md text-center text-white text-lg lg:text-xl xl:text-2xl 2xl:text-3xl whitespace-normal sm:w-full md:w-2/3 lg:w-4/5 xl:w-4/5">
                Ver todos
            </a>
            
            
            
            
            
            
            
        </div>
        @foreach ($libros as $libro)
            @if ($libro->IDCategoria == 1)
            
            <div class="rounded flex-none bg-orange-300 mx-2 sm:mx-4 md:mx-6 lg:mx-8 xl:mx-10 p-1 w-32 text-sm sm:text-base md:text-text-base lg:text-base xl:text-base max-h-full flex flex-col">
                <a href="{{ route('libros.show', $libro->descripcion) }}" class="ml-1 block mb-0.5 h-10 overflow-hidden font-bold">{{ $libro->descripcion }}</a>
            
            @foreach ($courses as $course)
                @if ($course->courseID == $libro->courseID)
                    <a href="{{ route('libros.show', $course->titulo) }}" class="block mb-0.5 h-6 overflow-hidden text-center">{{ $course->titulo }}</a>
                @endif
            @endforeach
            
            <a href="{{ route('libros.create') }}" class="mb-0.5 mt-4  h-1/4 block mx-auto p-1 lg:p-4 bg-green-700 rounded-md text-center text-white text-base  whitespace-normal w-[80%] ">
                solicitar
            </a>
        </div>
    @endif
    @endforeach
    
    
   
    </div>
    <h1 class="mb-2 mt-3 font-bold text-xl lg:text-2xl xl:text-3xl ml-4">Libros de lectura</h1> 

    <div class="flex flex-nowrap overflow-x-scroll">        
        <div class="mt-10">      
            <a href="{{ route('libros.create') }}" class="h-auto block mx-auto mb-4 p-2 lg:p-4 bg-green-700 rounded-md text-center text-white text-lg lg:text-xl xl:text-2xl 2xl:text-3xl whitespace-normal sm:w-full md:w-2/3 lg:w-4/5 xl:w-4/5">
                Ver todos
            </a>
        </div>
    
        @foreach ($libros as $libro)
            @if ($libro->IDCategoria == 2)
            
        <div class="rounded flex-none bg-orange-300 mx-2 sm:mx-4 md:mx-6 lg:mx-8 xl:mx-10 p-1 w-32 text-sm sm:text-base md:text-text-base lg:text-base xl:text-base max-h-full flex flex-col">
            <a href="{{ route('libros.show', $libro->descripcion) }}" class="ml-1 block mb-0.5 h-10 overflow-hidden font-bold">{{ $libro->descripcion }}</a>
            
            @foreach ($courses as $course)
                @if ($course->courseID == $libro->courseID)
                    <a href="{{ route('libros.show', $course->titulo) }}" class="block mb-0.5 h-6 overflow-hidden text-center">{{ $course->titulo }}</a>
                @endif
            @endforeach
            
            <a href="{{ route('libros.create') }}" class="mb-0.5 mt-4  h-1/4 block mx-auto p-1 lg:p-4 bg-green-700 rounded-md text-center text-white text-base  whitespace-normal w-[80%] ">
                solicitar
            </a>
            
        </div>
    @endif
    @endforeach
    
    </div>
</div>
@endsection
