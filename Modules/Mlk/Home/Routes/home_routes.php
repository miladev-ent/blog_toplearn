<?php

use Illuminate\Support\Facades\Route;

Route::group([], function ($router) {
    Route::get('/', 'HomeController@index');
});
