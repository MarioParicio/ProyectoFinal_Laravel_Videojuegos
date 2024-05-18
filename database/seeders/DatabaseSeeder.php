<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Crear usuario administrador
        \App\Models\User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // Crear usuarios regulares y sus videojuegos
        \App\Models\User::factory(10)->create()->each(function ($user) {
            \App\Models\Videojuego::factory(5)->create(['user_id' => $user->id]);
        });
    }
}
