<?php

namespace Mlk\Panel\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PanelServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'Panel');
        $this->mergeConfigFrom(__DIR__ . '/../Config/config.php', 'panelConfig');

        Route::middleware('web')->namespace('Mlk\Panel\Http\Controllers')->group(__DIR__ . '/../Routes/panel_routes.php');
    }

    public function boot()
    {
        $this->app->booted(static function () {
            config()->set('panelConfig.menus.panel', [
                'url'   => route('panel.index'),
                'title' => 'پنل کاربری',
                'icon'  => 'view-dashboard',
            ]);
        });
    }
}
