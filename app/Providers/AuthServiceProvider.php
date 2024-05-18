<?php

namespace App\Providers;

use App\Models\Videojuego;
use App\Policies\VideojuegoPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Videojuego::class => VideojuegoPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
