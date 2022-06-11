<?php

namespace Mlk\Comment\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
        $this->loadViewsFrom(__DIR__ . '/../Resources/Views/', 'Comment');
        Route::middleware('web')->namespace('Mlk\Comment\Http\Controller')->group(__DIR__ . '/../Routes/comment_routes.php');
    }

    public function boot()
    {
        config()->set('panelConfig.menus.comments', [
            'url'   => route('comments.index'),
            'title' => 'نظرات',
            'icon'  => 'comment',
        ]);
    }
}
