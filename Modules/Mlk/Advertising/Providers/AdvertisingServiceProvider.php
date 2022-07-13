<?php

namespace Mlk\Advertising\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Mlk\Advertising\Models\Advertising;
use Mlk\Advertising\Policies\AdvertisingPolicy;

class AdvertisingServiceProvider extends ServiceProvider
{
    public string $namespace = 'Mlk\Advertising\Http\Controllers';

    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'Advs');
        $this->loadJsonTranslationsFrom(__DIR__ . '/../Resources/Lang/');

        Route::middleware('web')->namespace($this->namespace)
        ->group(__DIR__ . '/../Routes/advertising_routes.php');
        Gate::policy(Advertising::class, AdvertisingPolicy::class);
    }

    public function boot()
    {
        config()->set('panelConfig.menus.advertisings', [
            'url'   => route('advertisings.index'),
            'title' => 'تبلیغات',
            'icon'  => 'file',
        ]);
    }
}
