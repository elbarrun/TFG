<?php

namespace App\Policies;

use App\Models\Noticia;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NoticiaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->role === 'Jugador';

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Noticia $noticia): bool
    {
        return $user->role === 'Jugador';

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
    public function update(User $user, Noticia $noticia): bool
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
    public function delete(User $user, Noticia $noticia): bool
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
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Noticia $noticia): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Noticia $noticia): bool
    {
        //
    }
}
