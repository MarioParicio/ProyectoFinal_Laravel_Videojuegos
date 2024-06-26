<?php
namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    public function index()
    {
        $videojuegos = Videojuego::all();
        return view('videojuegos.index', compact('videojuegos'));
    }

    public function create()
    {
        return view('videojuegos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'genero' => 'required',
            'plataforma' => 'required',
            'imagen' => 'nullable|image',
        ]);

        $data = $request->only('nombre', 'descripcion', 'genero', 'plataforma');
        $data['user_id'] = auth()->id();

        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('public/imagenes');
        }

        Videojuego::create($data);

        return redirect()->route('videojuegos.index')->with('success', 'Videojuego creado correctamente.');
    }

    public function show(Videojuego $videojuego)
    {
        return view('videojuegos.show', compact('videojuego'));
    }

    public function edit(Videojuego $videojuego)
    {
        return view('videojuegos.edit', compact('videojuego'));
    }

    public function update(Request $request, Videojuego $videojuego)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'genero' => 'required',
            'plataforma' => 'required',
            'imagen' => 'nullable|image',
        ]);

        $videojuego->update($request->only('nombre', 'descripcion', 'genero', 'plataforma'));

        if ($request->hasFile('imagen')) {
            $videojuego->imagen = $request->file('imagen')->store('public/imagenes');
        }

        return redirect()->route('videojuegos.index')->with('success', 'Videojuego actualizado correctamente.');
    }

    public function destroy(Videojuego $videojuego)
    {
        $videojuego->delete();
        return redirect()->route('videojuegos.index')->with('success', 'Videojuego eliminado correctamente.');
    }
}

