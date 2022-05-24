<?php

namespace Mlk\Panel\Http\Controllers;

use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index()
    {
        return view('Panel::index');
    }
}
