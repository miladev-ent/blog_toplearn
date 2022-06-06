<?php

namespace Mlk\Category\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Mlk\Category\Models\Category;
use Mlk\Category\Policies\CategoryPolicy;

class CategoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'Category');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../Resources/Lang');

        Route::middleware('web')->namespace('Mlk\Category\Http\Controllers')->group(__DIR__ . '/../Routes/category_routes.php');
        Gate::policy(Category::class, CategoryPolicy::class);
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
