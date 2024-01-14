
<header class="bg-red-800 fixed top-0 w-full z-50">
    <div class="flex justify-between items-center p-4">
        <div class="flex items-center">
            <a href="{{ route('libros.index') }}" class="bg-white p-2 rounded mr-2">
                <img src="{{ asset('images/logovedrunagracia.png') }}" alt="Logo" class="h-12">
            </a>
        </div>
        <div class="flex items-center space-x-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-white hover:text-black font-bold">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-white  hover:text-black font-bold">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-white  hover:text-black font-bold">Register</a>
                @endif
            @endauth
        </div>
    </div>
    <div class="flex items-center justify-center">
        <nav>
            <ul class="flex space-x-12">
                <li><a href="{{ route('libros.index') }}" class="text-white hover:text-black font-bold transition duration-300">Inicio</a></li>
                <li class="relative group">
                    <a href="#" class="text-white hover: font-bold transition duration-300">ESO</a>
                    <ul class="absolute hidden font-bold bg-red-800 border shadow-lg py-2 space-y-2 group-hover:block w-48">
                        @php
                            $cursosESO = App\Models\Course::where('titulo', 'like', '%ESO%')->get();
                        @endphp
    
                        @foreach ($cursosESO as $curso)
                            <li><a href="{{ route('libros.curso', $curso->id) }}" class="block px-4 py-2 text-white hover:bg-red-400">{{ $curso->titulo }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="relative group">
                    <a href="#" class="text-white hover: font-bold transition duration-300">Batxillerat</a>
                    <ul class="absolute hidden font-bold bg-red-800 border shadow-lg py-2 space-y-2 group-hover:block w-48">
                        @php
                            $cursosESO = App\Models\Course::where('titulo', 'like', '%BATXI%')->get();
                        @endphp
    
                        @foreach ($cursosESO as $curso)
                            <li><a href="{{ route('libros.curso', $curso->id) }}" class="block px-4 py-2 text-white hover:bg-red-400">{{ $curso->titulo }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('libros.contacto') }}" class="text-white hover:text-black font-bold transition duration-300">Contacte</a></li>
            </ul>
        </nav>
    </div>
    
       
    
</header>
