<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function ($router) {
    $router->get('panel', 'PanelController@index')->name('panel.index');
});
