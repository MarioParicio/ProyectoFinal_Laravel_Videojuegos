@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    @guest
        <h1 class="text-4xl font-bold text-center text-white">Bienvenido a la aplicación de videojuegos</h1>
        <div class="text-center mt-5">
            <p class="text-lg text-white">Por favor, <a href="{{ route('login') }}" class="text-blue-500 hover:underline">inicia sesión</a> o <a href="{{ route('register') }}" class="text-blue-500 hover:underline">regístrate</a> para gestionar tus videojuegos.</p>
            <img src="https://media.istockphoto.com/id/1324673294/es/foto/consola-de-videojuegos-hombre-jugando-rpg-juego-de-estrategia.jpg?s=612x612&w=0&k=20&c=HDzXeYWvwxhuf1IASoRtobb-nghBMBFdX7k0GOe4Ww0=" alt="Videojuegos" class="mx-auto mt-5 rounded-lg shadow-lg">

        </div>
    @else
        <h1 class="text-4xl font-bold text-center text-white">Bienvenido, {{ Auth::user()->name }}</h1>
        <div class="text-center mt-5">
            <p class="text-lg text-white">Accede a la <a href="{{ route('videojuegos.index') }}" class="text-blue-500 hover:underline">lista de videojuegos</a> para ver y gestionar tus juegos.</p>
            <img src="https://media.istockphoto.com/id/1324673294/es/foto/consola-de-videojuegos-hombre-jugando-rpg-juego-de-estrategia.jpg?s=612x612&w=0&k=20&c=HDzXeYWvwxhuf1IASoRtobb-nghBMBFdX7k0GOe4Ww0=" alt="Videojuegos" class="mx-auto mt-5 rounded-lg shadow-lg">
        </div>
    @endguest

    <div class="mt-10">
        <h2 class="text-2xl font-bold text-white">Características de la Aplicación</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-5">
            <div class="bg-gray-800 p-5 rounded-lg text-center shadow-lg">
                <i class="fas fa-gamepad text-4xl text-white"></i>
                <h3 class="text-xl font-bold text-white mt-2">Gestiona tus videojuegos</h3>
                <p class="text-gray-300 mt-2">Añade, edita y elimina tus videojuegos fácilmente.</p>
            </div>
            <div class="bg-gray-800 p-5 rounded-lg text-center shadow-lg">
                <i class="fas fa-cloud-upload-alt text-4xl text-white"></i>
                <h3 class="text-xl font-bold text-white mt-2">Sube imágenes</h3>
                <p class="text-gray-300 mt-2">Sube imágenes de tus juegos favoritos.</p>
            </div>
            <div class="bg-gray-800 p-5 rounded-lg text-center shadow-lg">
                <i class="fas fa-mobile-alt text-4xl text-white"></i>
                <h3 class="text-xl font-bold text-white mt-2">Acceso desde cualquier dispositivo</h3>
                <p class="text-gray-300 mt-2">Accede a la lista de videojuegos desde cualquier lugar.</p>
            </div>
            <div class="bg-gray-800 p-5 rounded-lg text-center shadow-lg">
                <i class="fas fa-user-friends text-4xl text-white"></i>
                <h3 class="text-xl font-bold text-white mt-2">Interfaz intuitiva</h3>
                <p class="text-gray-300 mt-2">Interfaz fácil de usar y gestionar.</p>
            </div>
        </div>
    </div>

    <div class="mt-10">
        <h2 class="text-2xl font-bold text-white">Cómo Empezar</h2>
        <ol class="list-decimal list-inside text-lg text-white mt-5 bg-gray-800 p-5 rounded-lg shadow-lg">
            <li>Regístrate para crear una cuenta.</li>
            <li>Inicia sesión con tu nueva cuenta.</li>
            <li>Accede a la lista de videojuegos y comienza a añadir tus juegos.</li>
            <li>Disfruta gestionando tu colección de videojuegos.</li>
        </ol>
    </div>

    <div class="mt-10">
        <h2 class="text-2xl font-bold text-white">¿Tienes Preguntas?</h2>
        <p class="text-lg text-white mt-5">Visita nuestra <a href="#" class="text-blue-500 hover:underline">página de ayuda</a> o <a href="#" class="text-blue-500 hover:underline">contacta con nosotros</a>.</p>
    </div>
</div>
@endsection
