<?php

use Illuminate\Support\Facades\Route;

Route::group([], function ($router) {
    // Register
    $router->get('register', 'RegisterController@view')->name('auth.register');
    $router->post('register', 'RegisterController@register')->name('auth.register.store');

    // Login
    $router->get('login', 'LoginController@view')->name('login');
//    $router->get('login', 'LoginController@view')->name('auth.login');
    $router->post('login', 'LoginController@login')->name('auth.login.store');

    // Email Verify
    $router->get('email/verify', 'VerifyController@view')->name('auth.verify.email')->middleware('auth');
    $router->get('email/verify/{id}/{hash}', 'VerifyController@verify')->name('verification.verify')->middleware(['auth', 'signed']);
    $router->post('email/verify/resend', 'VerifyController@resend')->name('verify.resend')->middleware(['auth', 'throttle:5,1']);

    // Password Reset
    $router->get('password/email', 'ResetController@view')->name('auth.password.email')->middleware('guest');
    $router->post('password/send-email', 'ResetController@sendEmail')->name('auth.password.send.email')->middleware('guest');
    $router->get('password/reset', 'ResetController@reset')->name('password.reset')->middleware('guest');
    $router->post('password/reset', 'ResetController@update')->name('password.update')->middleware('guest');

    // Logout
    $router->get('logout', 'LogoutController')->name('auth.logout')->middleware('auth');
});
