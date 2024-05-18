@extends('layouts.app')

@section('content')
<div class="container">
    @guest
        <h1>Bienvenido a la aplicación de videojuegos</h1>
    @else
        <h1>Bienvenido, {{ Auth::user()->name }}</h1>
    @endguest
</div>
@endsection
