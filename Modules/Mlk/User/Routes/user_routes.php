<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], static function ($router) {
    $router->get('users/add/{userId}/role', 'UserController@addRole')->name('users.add.role');
    $router->post('users/add/{userId}/role', 'UserController@addRoleStore')->name('users.add.role.store');
    $router->delete('users/remove/{userId}/role/{roleId}', 'UserController@removeRole')->name('users.remove.role');

    $router->resource('users', 'UserController', ['except' => 'show']);
});

Route::group(['namespace' => 'Home'], static function ($router) {
    $router->get('authors', 'UserController@authors')->name('users.authors');
    $router->get('authors/{name}', 'UserController@author')->name('users.author');
});
