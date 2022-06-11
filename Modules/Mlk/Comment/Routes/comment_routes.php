<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'namespace' => 'Admin'], static function ($router) {
    $router->patch('comments/{id}/status', ['uses' => 'CommentController@changeStatus', 'as' => 'comments.change.status']);
    $router->get('comments', ['uses' => 'CommentController@index', 'as' => 'comments.index']);
    $router->delete('comments/{id}', ['uses' => 'CommentController@destroy', 'as' => 'comments.destroy']);
});
