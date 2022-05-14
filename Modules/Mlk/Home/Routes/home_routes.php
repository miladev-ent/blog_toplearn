<?php

use Illuminate\Support\Facades\Route;

Route::group([], function ($router) {
    $router->get('/', 'HomeController@index')->name('home.index');
});
