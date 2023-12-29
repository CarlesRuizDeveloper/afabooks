<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>
    <header class="bg-red-800">
        <div class="flex justify-between items-center p-4">
            <div class="flex items-center">
                <div class="bg-white p-2 rounded mr-2">
                    <img src="{{ asset('images/logovedrunagracia.png') }}" alt="Logo" class="h-12">
                </div>
                <!-- Puedes ajustar la cantidad de espacio alrededor del logo cambiando el valor de `mr-2` -->
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

    <footer>
        <div class="bg-red-600">
            <p>Powered by</p>
        </div>
    </footer>
</body>
</html>