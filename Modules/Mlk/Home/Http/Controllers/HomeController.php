<?php

namespace Mlk\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Mlk\Category\Repositories\CategoryRepo;
use Mlk\Home\Repositories\HomeRepo;

class HomeController extends Controller
{
    public function index(HomeRepo $homeRepo, CategoryRepo $categoryRepo)
    {
        $categories = $categoryRepo->getActiveCategories()->get();
        return view('Home::index', compact(['homeRepo', 'categories']));
    }
}
