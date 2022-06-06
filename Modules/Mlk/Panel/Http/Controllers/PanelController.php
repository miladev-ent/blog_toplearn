<?php

namespace Mlk\Panel\Http\Controllers;

use App\Http\Controllers\Controller;
use Mlk\Panel\Models\Panel;

class PanelController extends Controller
{
    public function index()
    {
        $this->authorize('index', Panel::class);
        return view('Panel::index');
    }
}
