<?php

namespace Mlk\Auth\Http\Controllers;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function view()
    {
        return view('Auth::register');
    }

    public function register()
    {

    }
}
