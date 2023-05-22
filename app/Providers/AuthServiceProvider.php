<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Tactica;
use App\Models\User;
use App\Policies\TacticaPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use App\Rules\ValidRole;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Tactica::class => TacticaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('tactica', TacticaPolicy::class);

        // Define las políticas para las noticias y otros modelos si es necesario
        // Gate::define('view-noticia', ...);
        // Gate::define('create-noticia', ...);
        // Gate::define('update-noticia', ...);
        // Gate::define('delete-noticia', ...);
    }
}
