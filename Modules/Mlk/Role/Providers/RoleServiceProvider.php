<?php

namespace Mlk\Role\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'Role');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations/');

        Route::middleware('web')->namespace('Mlk\Role\Http\Controllers')
        ->group(__DIR__ . '/../Routes/role_routes.php');
    }

    public function boot()
    {
        config()->set('panelConfig.menus.roles', [
            'url'   => route('roles.index'),
            'title' => 'مقام ها',
            'icon'  => 'bug',
        ]);
    }
}
