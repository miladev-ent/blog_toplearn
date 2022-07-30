<?php

namespace Mlk\Share\Providers;

use Illuminate\Support\ServiceProvider;

class ShareServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'Share');
        $this->loadViewComponentsAs('panel', [
            \Mlk\Share\Components\Panel\Button::class,
            \Mlk\Share\Components\Panel\Select::class,
        ]);
    }
}
