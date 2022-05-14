<?php

namespace Mlk\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Mlk\Auth\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function view()
    {
        return view('Auth::login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return to_route('home.index');
        }

        return redirect()->back()->withErrors(['data_problem' => 'اطلاعات درست نبوده!']);
    }
}
