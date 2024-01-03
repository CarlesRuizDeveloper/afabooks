<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body class="pt-16 pb-16"> <!-- Agrega espacio en la parte superior e inferior igual a la altura del header y footer -->
    <header class="bg-red-800 fixed top-0 w-full z-50">
        <div class="flex justify-between items-center p-4">
            <div class="flex items-center">
                <a href="{{ route('libros.index') }}" class="bg-white p-2 rounded mr-2">
                    <img src="{{ asset('images/logovedrunagracia.png') }}" alt="Logo" class="h-12">
                </a>
            </div>
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-white hover:text-gray-300">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-white hover:text-gray-300">Log in</a>
    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-white hover:text-gray-300">Register</a>
                    @endif
                @endauth
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="bg-red-800 fixed bottom-0 w-full z-50"> <!-- Clases agregadas para fijar y estilizar el footer -->
        <div class="p-4 text-white">
            <p>Powered by<br>test</p>
        </div>
    </footer>
</body>
</html>
