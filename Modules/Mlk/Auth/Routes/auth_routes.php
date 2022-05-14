<?php

use Illuminate\Support\Facades\Route;

Route::group([], function ($router) {
    $router->get('register', 'RegisterController@view')->name('auth.register');
    $router->post('register', 'RegisterController@register')->name('auth.register.store');

});
