<?php

namespace Dnvcomp\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'Dnvcomp\Model' => 'Dnvcomp\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

       $gate->define('VIEW_ADMIN', function ($user) {
           return $user->canDo('VIEW_ADMIN',false);
       });

       $gate->define('VIEW_ADMIN_ARTICLES', function ($user) {
           return $user->canDo('VIEW_ADMIN_ARTICLES',false);
       });
    }
}