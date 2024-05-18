@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 px-4">
    <h1 class="text-4xl font-bold text-center text-white mb-10">Lista de Videojuegos</h1>
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('videojuegos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Añadir Videojuego</a>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($videojuegos as $videojuego)
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:bg-gray-700 transition duration-300">
                <h2 class="text-2xl font-bold mb-2 text-white">{{ $videojuego->nombre }}</h2>
                <p class="text-gray-300 mb-2">{{ $videojuego->descripcion }}</p>
                <p class="text-gray-300"><strong>Género:</strong> {{ $videojuego->genero }}</p>
                <p class="text-gray-300 mb-4"><strong>Plataforma:</strong> {{ $videojuego->plataforma }}</p>
                @if($videojuego->imagen)
                    <img src="{{ asset('storage/' . $videojuego->imagen) }}" alt="{{ $videojuego->nombre }}" class="w-full h-48 object-cover rounded mb-4">
                @endif
                <div class="flex justify-between">
                    <a href="{{ route('videojuegos.show', $videojuego) }}" class="text-blue-400 hover:underline">Ver más</a>
                    <a href="{{ route('videojuegos.edit', $videojuego) }}" class="text-yellow-400 hover:underline">Editar</a>
                    <form action="{{ route('videojuegos.destroy', $videojuego) }}" method="POST" class="inline delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-400 hover:underline">Eliminar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection