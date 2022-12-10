<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'Admin'], static function ($router) {
    $router->patch('articles/{id}/status', 'ArticleController@changeStatus')->name('articles.change.status');
    $router->resource('articles', 'ArticleController', ['except' => 'show']);
});

Route::group(['namespace' => 'Home'], static function ($router) {
    $router->get('articles', 'ArticleController@home')->name('articles.home');
    $router->get('articles/{slug}', 'ArticleController@details')->name('articles.details');
    $router->post('articles/like/{id}', 'ArticleController@like')->name('articles.like');
});
