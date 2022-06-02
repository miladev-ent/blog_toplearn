<?php

namespace Mlk\Category\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'Category');
        Route::middleware('web')->namespace('Mlk\Category\Http\Controllers')->group(__DIR__ . '/../Routes/category_routes.php');
    }

    public function boot()
    {
        config()->set('panelConfig.menus.categories', [
            'url'   => route('categories.index'),
            'title' => 'دسته بندی ها',
            'icon'  => 'folder-open-outline',
        ]);
    }
}
