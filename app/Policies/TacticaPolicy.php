<?php

namespace App\Policies;

use App\Models\Tactica;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class TacticaPolicy
{

    public function before(){
        if(Auth::user()->hasRole('Admin')){
            return true;
        }
    }
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
        $roles = $user->roles; // Obtener los roles del usuario

        foreach ($roles as $role) {
            if ($role->nombre === 'Entrenador'|| $role->nombre === 'Admin') {
                // El usuario tiene el rol de entrenador
                return true;
            }
        }

        // El usuario no tiene el rol de entrenador
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Tactica $tactica): bool
    {
        $roles = $user->roles; // Obtener los roles del usuario

        foreach ($roles as $role) {
            if ($role->nombre === 'Entrenador'|| $role->nombre === 'Admin') {
                // El usuario tiene el rol de entrenador
                return true;
            }
        }

        // El usuario no tiene el rol de entrenador
        return false;

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Tactica $tactica): bool
    {
        // Verificar si el usuario tiene el rol de administrador
        if ($user->hasRole('Admin')) {
            // El administrador puede eliminar todas las tácticas
            return true;
        }

        // Verificar si el usuario tiene el rol de entrenador
        if ($user->hasRole('Entrenador')) {
            // El entrenador puede eliminar solo sus propias tácticas
            return $user->id === $tactica->user_id;
        }

        // Por defecto, los jugadores no tienen permiso para eliminar tácticas
        return false;
    }

    // Resto de métodos de la política
    // ...
}
