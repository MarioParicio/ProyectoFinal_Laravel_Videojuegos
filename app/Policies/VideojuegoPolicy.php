<?php


namespace App\Policies;

use App\Models\User;
use App\Models\Videojuego;
use Illuminate\Auth\Access\HandlesAuthorization;

class VideojuegoPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Videojuego $videojuego)
    {
        return $user->id === $videojuego->user_id || $user->role === 'admin';
    }

    public function delete(User $user, Videojuego $videojuego)
    {
        return $user->id === $videojuego->user_id || $user->role === 'admin';
    }
}
