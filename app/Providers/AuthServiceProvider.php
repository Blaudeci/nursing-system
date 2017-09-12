<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('profile_admin', function( $user){
            return $user->profile == "Admin";
        });

        Gate::define('profile_enfermeiro', function($user){
            return $user->profile == "Enfermeiro";
        });

        Gate::define('profile_tecnico', function($user){
            return $user->profile == "Técnico";
        });
    }
}
