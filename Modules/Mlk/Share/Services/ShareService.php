<?php

namespace Mlk\Share\Services;

use Illuminate\Support\Facades\Storage;

class ShareService
{
    public static function uploadImage($file, $folder)
    {
        $name = time() . '.' . $file->getClientOriginalExtension();
        Storage::disk('public')->putFileAs('images/' . $folder, $file, $name);

        $path = asset('storage/images/' . $folder . '/' . $name);

        return [$name, $path];
    }

    public static function uploadVideo(mixed $file, string $folder)
    {
        $name = time() . '.' . $file->getClientOriginalExtension();
        Storage::disk('public')->putFileAs('videos/' . $folder, $file, $name);

        $path = asset('storage/videos/' . $folder . '/' . $name);

        return [$name, $path];
    }
}
