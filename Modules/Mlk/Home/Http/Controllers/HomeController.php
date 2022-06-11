<?php

namespace Mlk\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Mlk\Home\Repositories\HomeRepo;

class HomeController extends Controller
{
    public function index(HomeRepo $homeRepo)
    {
        return view('Home::index', compact('homeRepo'));
    }
}
