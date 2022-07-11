<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'panel', 'middleware' => ['auth', 'verify']], static function ($router) {
    $router->resource('advertisings', 'AdvertisingController');
});
