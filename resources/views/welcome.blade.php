@extends('layouts.app')

@section('content')
<div id="app" class="container mx-auto mt-10">
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
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.94 4.94a1.5 1.5 0 01-1.06 2.56H5.12a1.5 1.5 0 01-1.06-2.56L9 10m-4.94-4.94A1.5 1.5 0 015.12 2h13.76a1.5 1.5 0 011.06 2.56L15 10" />
                </svg>
                <h3 class="text-xl font-bold text-white mt-2">Gestiona tus videojuegos</h3>
                <p class="text-gray-300 mt-2">Añade, edita y elimina tus videojuegos fácilmente.</p>
            </div>
            <div class="bg-gray-800 p-5 rounded-lg text-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 014-4h10a4 4 0 014 4v6H3v-6zm16-2a6 6 0 00-12 0h12zM5 9V7a5 5 0 1110 0v2a5 5 0 01-10 0z" />
                </svg>



                <h3 class="text-xl font-bold text-white mt-2">Sube imágenes</h3>
                <p class="text-gray-300 mt-2">Sube imágenes de tus juegos favoritos.</p>
            </div>
            <div class="bg-gray-800 p-5 rounded-lg text-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4a1 1 0 112 0v2m-4 0V4a1 1 0 112 0v2m1 2H9a1 1 0 000 2h6a1 1 0 100-2zm-1 4H10a1 1 0 100 2h4a1 1 0 100-2zm-1 4H11a1 1 0 100 2h2a1 1 0 100-2z" />
                </svg>
                <h3 class="text-xl font-bold text-white mt-2">Acceso desde cualquier dispositivo</h3>
                <p class="text-gray-300 mt-2">Accede a la lista de videojuegos desde cualquier lugar.</p>
            </div>
            <div class="bg-gray-800 p-5 rounded-lg text-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h8m-8 4h4m-6-8h10a4 4 0 011.66.35l1.82-1.82a4 4 0 00-5.66-5.66L14 5.34A4 4 0 0112 5a4 4 0 00-4 4H8zm0 4a4 4 0 00-4 4h1.34a4 4 0 014-4zm-4 4h4a4 4 0 004-4V8a4 4 0 10-4 4H8z" />
                </svg>
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
