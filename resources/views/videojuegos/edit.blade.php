@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 px-4">
    <h1 class="text-4xl font-bold text-center text-white mb-10">Editar Videojuego</h1>

    @if($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('videojuegos.update', $videojuego->id) }}" method="POST" enctype="multipart/form-data" class="bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nombre" class="block text-gray-400 text-sm font-bold mb-2">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $videojuego->nombre }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="descripcion" class="block text-gray-400 text-sm font-bold mb-2">Descripción:</label>
            <textarea name="descripcion" id="descripcion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $videojuego->descripcion }}</textarea>
        </div>
        <div class="mb-4">
            <label for="genero" class="block text-gray-400 text-sm font-bold mb-2">Género:</label>
            <input type="text" name="genero" id="genero" value="{{ $videojuego->genero }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="plataforma" class="block text-gray-400 text-sm font-bold mb-2">Plataforma:</label>
            <input type="text" name="plataforma" id="plataforma" value="{{ $videojuego->plataforma }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="imagen" class="block text-gray-400 text-sm font-bold mb-2">Imagen:</label>
            <input type="file" name="imagen" id="imagen" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if ($videojuego->imagen)
                <img src="{{ asset('storage/' . $videojuego->imagen) }}" alt="{{ $videojuego->nombre }}" class="w-full h-48 object-cover rounded mt-4">
            @endif
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Actualizar</button>
    </form>
</div>
@endsection
