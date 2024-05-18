@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Videojuego</h1>
    <form action="{{ route('videojuegos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="mb-4">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <div class="mb-4">
            <label for="genero">Género:</label>
            <input type="text" name="genero" class="form-control">
        </div>
        <div class="mb-4">
            <label for="plataforma">Plataforma:</label>
            <input type="text" name="plataforma" class="form-control">
        </div>
        <div class="mb-4">
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>
@endsection
