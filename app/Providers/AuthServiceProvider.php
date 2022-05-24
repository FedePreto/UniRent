<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     * In questo metodo definiamo le regole di autorizzazione
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin', function($user){
            return $user->hasLivello(0);
        });

        Gate::define('isLocatore',function($user){
            return $user->hasLivello(1);
        });

        Gate::define('isLocatario', function($user){
            return $user->hasLivello(2);
        });

        Gate::define('show-filtri', function($user){
            return $user->hasLivello([0,1,2]);
        });
    }
}
