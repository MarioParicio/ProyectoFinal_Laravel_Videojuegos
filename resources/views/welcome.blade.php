@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    @guest
        <h1 class="text-3xl font-bold text-center">Bienvenido a la aplicación de videojuegos</h1>
    @else
        <h1 class="text-3xl font-bold text-center">Bienvenido, {{ Auth::user()->name }}</h1>
    @endguest
</div>
@endsection
