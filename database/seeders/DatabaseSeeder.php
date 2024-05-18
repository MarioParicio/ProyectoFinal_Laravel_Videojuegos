<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Videojuego;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Verificar si el usuario administrador ya existe
        if (!User::where('email', 'admin@example.com')->exists()) {
            // Crear usuario administrador
            User::factory()->create([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ]);
        }

        // Crear usuarios regulares y sus videojuegos
        User::factory(10)->create()->each(function ($user) {
            Videojuego::factory(5)->create(['user_id' => $user->id]);
        });
    }
}
