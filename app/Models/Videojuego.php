<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'genero',
        'plataforma',
        'imagen',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
