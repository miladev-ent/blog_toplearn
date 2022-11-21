<?php

namespace Mlk\Home\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Mlk\Advertising\Models\Advertising;
use Mlk\Advertising\Repositories\AdvertisingRepo;
use Mlk\Home\Repositories\HomeRepo;
use Mlk\Share\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(HomeRepo $homeRepo, AdvertisingRepo $advertisingRepo)
    {
//        dd(Storage::disk('local')->get('private/milwad.txt'));
//        dd(Storage::disk('local')->get('private/laravel-frame.png'));

        $adv_top = Cache::remember('top_advs', 2, function () use ($advertisingRepo) {
            return $advertisingRepo->getAdvByLocation(Advertising::LOCATION_TOP_MAIN_PAGE)->latest()->first();
        });
//        $adv_top = $advertisingRepo->getAdvByLocation(Advertising::LOCATION_TOP_MAIN_PAGE)->latest()->first();
        $adv_bottom = $advertisingRepo->getAdvByLocation(Advertising::LOCATION_BOTTOM_MAIN_PAGE)->latest()->first();

        return view('Home::index', compact(['homeRepo', 'adv_top', 'adv_bottom']));
    }
}
