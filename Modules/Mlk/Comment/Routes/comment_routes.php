<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'Admin'], static function ($router) {
    $router->patch('comments/{id}/status/active', ['uses' => 'CommentController@active', 'as' => 'comments.change.status.active']);
    $router->patch('comments/{id}/status/inactive', ['uses' => 'CommentController@inactive', 'as' => 'comments.change.status.inactive']);
    $router->get('comments', ['uses' => 'CommentController@index', 'as' => 'comments.index']);
    $router->delete('comments/{id}', ['uses' => 'CommentController@destroy', 'as' => 'comments.destroy']);
});
