@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1>pagina principal libros</h1>   
    
    <a href="{{route('libros.create')}}" >Donar libro</a>
    <ul>
        @foreach ($libros as $libro)
            <li>
                <a href="{{route('libros.show', $libro->id)}}" >{{$libro->id}}</a>
            </li>
        @endforeach
    </ul> 
    <style>
        .slider-container {
            width: 80%; /* Ajusta el ancho del slider según tu diseño */
        }
    
        .slider-wrapper {
            transition: transform 0.5s ease-in-out;
        }
    
        .slide {
            min-width: 250px; /* Ajusta el ancho de cada slide según tu diseño */
            margin-right: 20px; /* Espaciado entre slides */
        }
    </style>
    <div class="flex items-center justify-center h-screen">
        <div class="slider-container overflow-hidden">
            <div class="slider-wrapper flex transition-transform duration-300 ease-in-out">
                @foreach ($libros as $libro)
                    <div class="slide p-4">
                        <h3 class="text-lg font-semibold">{{ $libro->codigo }}</h3>
                        <p class="text-sm text-gray-600">{{ $libro->codigo }}</p>
                        <a href="{{route('libros.show', $libro->id)}}" >{{$libro->id}}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{$libros->links()}}
@endsection

<script>
    const slider = document.querySelector('.slider-wrapper');
    let translateValue = 0;

    function nextSlide() {
        translateValue -= 270; // Ajusta el valor según el ancho de cada slide + margen
        slider.style.transform = `translateX(${translateValue}px)`;
    }

    function prevSlide() {
        translateValue += 270; // Ajusta el valor según el ancho de cada slide + margen
        slider.style.transform = `translateX(${translateValue}px)`;
    }
</script>



