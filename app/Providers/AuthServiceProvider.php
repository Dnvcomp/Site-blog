<?php

namespace Dnvcomp\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use Dnvcomp\Article;
use Dnvcomp\Permission;
use Dnvcomp\Menu;
use Dnvcomp\Policies\ArticlePolicy;
use Dnvcomp\Policies\PermissionPolicy;
use Dnvcomp\Policies\MenusPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Article::class => ArticlePolicy::class,
        Permission::class => PermissionPolicy::class,
        Menu::class => MenusPolicy::class,

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

        $gate->define('EDIT_USERS', function ($user) {
           return $user->canDo('EDIT_USERS',false);
        });

        $gate->define('VIEW_ADMIN_MENU', function ($user) {
            return $user->canDo('VIEW_ADMIN_MENU',false);
        });
    }
}