<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'Admin'], static function ($router) {
    $router->patch('articles/{id}/status', 'ArticleController@changeStatus')->name('articles.change.status');
    $router->resource('articles', 'ArticleController', ['except' => 'show']);
});
