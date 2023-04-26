<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Tactica;
use App\Policies\TacticaPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [

       'App\Models\Tactica' => 'App\Policies\TacticaPolicy',
   ];



    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
