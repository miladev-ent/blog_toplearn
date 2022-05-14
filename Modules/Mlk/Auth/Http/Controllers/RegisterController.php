<?php

namespace Mlk\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Mlk\Auth\Http\Requests\RegisterRequest;
use Mlk\Auth\Services\RegisterService;

class RegisterController extends Controller
{
    public function view()
    {
        return view('Auth::register');
    }

    public function register(RegisterRequest $request, RegisterService $registerService)
    {
        $user = $registerService->generateUser($request);

        auth()->loginUsingId($user->id);

        return redirect()->route('home.index');
    }
}
