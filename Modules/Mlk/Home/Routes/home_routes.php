<?php

use Illuminate\Support\Facades\Route;

Route::group([], function ($router) {
    $router->get('/', ['uses' => 'HomeController@index', 'as' => 'home.index']);
});
