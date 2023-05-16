<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Tactica;
use App\Models\User;
use App\Policies\TacticaPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Tactica::class => TacticaPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create_tacticas', function (User $user) {
            return $user->tieneRol('admin');
        });
    }
}
