<?php

namespace App\Policies;

use App\Models\Tactica;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TacticaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Los jugadores y entrenadores pueden ver todas las tácticas
        return $user->role === 'Jugador' || $user->role === 'Entrenador';
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Tactica $tactica): bool
    {
        // Los jugadores y entrenadores pueden ver la táctica
        return $user->role === 'Jugador' || $user->role === 'Entrenador';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Solo los entrenadores pueden crear tácticas
        return $user->role === 'Entrenador';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Tactica $tactica): bool
    {
        // Solo los entrenadores pueden actualizar la táctica
        return $user->role === 'Entrenador';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Tactica $tactica): bool
    {
        // Solo los entrenadores pueden eliminar la táctica
        return $user->role === 'Entrenador';
    }

    // Resto de métodos de la política
    // ...
}
