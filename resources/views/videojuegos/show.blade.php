@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 px-4">
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg flex items-start space-x-4">
        @if($videojuego->imagen)
            <img src="{{ Storage::url($videojuego->imagen) }}" alt="{{ $videojuego->nombre }}" class="w-32 h-32 object-cover rounded">
        @else
            <div class="w-32 h-32 bg-gray-700 rounded flex items-center justify-center text-gray-400">
                Sin imagen
            </div>
        @endif
        <div class="flex-1 space-y-2">
            <h1 class="text-4xl font-bold text-white">{{ $videojuego->nombre }}</h1>
            <p class="text-gray-300">{{ $videojuego->descripcion }}</p>
            <p class="text-gray-400"><strong>Género:</strong> {{ $videojuego->genero }}</p>
            <p class="text-gray-400 mb-4"><strong>Plataforma:</strong> {{ $videojuego->plataforma }}</p>
            <a href="{{ route('videojuegos.index') }}" class="text-blue-300 hover:text-blue-400 hover:underline">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection
