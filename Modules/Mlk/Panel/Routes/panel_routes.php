<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], static function ($router) {
    $router->get('panel', ['uses' => 'PanelController@index', 'as' => 'panel.index']);
});
