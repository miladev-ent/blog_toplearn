<?php

namespace Mlk\Advertising\Services;

use Illuminate\Support\Facades\Storage;
use Mlk\Advertising\Models\Advertising;

class AdvertisingService
{
    public function store($request, $imagePath, $imageName)
    {
        return Advertising::query()->create([
            'user_id' => auth()->id(),
            'imagePath' => $imagePath,
            'imageName' => $imageName,
            'link' => $request->link,
            'title' => $request->title,
            'location' => $request->location,
        ]);
    }

    public function update($request, $id, $imagePath, $imageName)
    {
        return Advertising::query()->where('id', $id)->update([
            'imagePath' => $imagePath,
            'imageName' => $imageName,
            'link' => $request->link,
            'title' => $request->title,
            'location' => $request->location,
        ]);
    }

    public function deleteImage($article)
    {
        if (Storage::disk('public')->exists('images/' . $article->imageName)) {
            return Storage::disk('public')->delete('images/' . $article->imageName);
        }

        return null;
    }
}
