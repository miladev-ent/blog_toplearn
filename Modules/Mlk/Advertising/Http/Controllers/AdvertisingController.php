<?php

namespace Mlk\Advertising\Http\Controllers;

use App\Http\Controllers\Controller;
use Mlk\Advertising\Http\Requests\AdvertisingRequest;
use Mlk\Advertising\Models\Advertising;
use Mlk\Advertising\Repositories\AdvertisingRepo;
use Mlk\Advertising\Services\AdvertisingService;
use Mlk\Share\Repositories\ShareRepo;
use Mlk\Share\Services\ShareService;

class AdvertisingController extends Controller
{
    private string $class = Advertising::class;

    public AdvertisingRepo $repo;
    public AdvertisingService $service;

    public function __construct(AdvertisingRepo $advertisingRepo, AdvertisingService $advertisingService)
    {
        $this->repo = $advertisingRepo;
        $this->service = $advertisingService;
    }

    public function index()
    {
        $this->authorize('index', $this->class);
        $advertisings = $this->repo->index()->paginate(10);

        return view('Advs::index', compact('advertisings'));
    }

    public function create()
    {
        $this->authorize('index', $this->class);
        return view('Advs::create');
    }

    public function store(AdvertisingRequest $request)
    {
        $this->authorize('index', $this->class);

        [$imageName, $imagePath] = ShareService::uploadImage($request->file('image'), null);
        $this->service->store($request, $imagePath, $imageName);

        ShareRepo::successMessage('ساخت تبیلغات');
        return to_route('advertisings.index');
    }

    public function edit($id)
    {
        $this->authorize('index', $this->class);
        $advertising = $this->repo->findById($id);

        return view('Advs::edit', compact('advertising'));
    }

    public function update(AdvertisingRequest $request, $id)
    {
        $this->authorize('index', $this->class);

        $advertising = $this->repo->findById($id);
        [$imageName, $imagePath] = $this->uploadImage($request->file('image'), $advertising);
        $this->service->update($request, $id, $imagePath, $imageName);

        ShareRepo::successMessage('ویرایش تبلیغات');
        return to_route('advertisings.index');
    }

    public function destroy($id)
    {
        $this->authorize('index', $this->class);

        $article = $this->repo->findById($id);
        $this->service->deleteImage($article);
        $this->repo->delete($id);

        ShareRepo::successMessage('حذف تبلیغات');
        return to_route('advertisings.index');
    }

    // Private Method
    private function uploadImage($file, $article): array
    {
        if (!is_null($file)) {
            [$imageName, $imagePath] = ShareService::uploadImage($file, null);
        }
        else {
            $imageName = $article->imageName;
            $imagePath = $article->imagePath;
        }

        return array($imageName, $imagePath);
    }
}
