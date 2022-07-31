<?php

use Illuminate\Support\Facades\Notification;
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
    $router->get('profile', 'UserController@profile')->name('users.profile')->middleware('auth');
    $router->patch('profile', 'UserController@updateProfile')->name('users.update.profile')->middleware('auth');

    $router->get('send/email', static function () {
        dispatch(new Mlk\User\Jobs\SendEmailToUserJob('milwad@gmail.com'));

        return 'send';
    });
    $router->get('send/notifications', static function () {
       Notification::send(auth()->user(), new Mlk\User\Notifications\SendEmailToUserNotification);

        return 'notif';
    });
    $router->get('mark/notifications', static function () {
        auth()->user()->unreadNotifications->markAsRead();

        \Mlk\Share\Repositories\ShareRepo::successMessage(title: 'پیام ها با موفقیت خوانده شد');
        return back();
    })->name('mark.notifications');
    $router->get('fire/event', static function () {
        event(new Mlk\User\Events\SendEmailToUserEvent('milwad@gmail.com'));

        return 'event fired';
    });
});
