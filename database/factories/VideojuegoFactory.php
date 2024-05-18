<?php

namespace Database\Factories;

use App\Models\Videojuego;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideojuegoFactory extends Factory
{
    protected $model = Videojuego::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'genero' => $this->faker->word(),
            'plataforma' => $this->faker->word(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
