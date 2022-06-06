<?php

namespace Mlk\Role\Providers;

use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Mlk\Role\Database\Seeders\PermissionSeeder;

class RoleServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'Role');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations/');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../Resources/Lang/');

        Route::middleware('web')->namespace('Mlk\Role\Http\Controllers')
        ->group(__DIR__ . '/../Routes/role_routes.php');
        DatabaseSeeder::$seeders[] = PermissionSeeder::class;
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
