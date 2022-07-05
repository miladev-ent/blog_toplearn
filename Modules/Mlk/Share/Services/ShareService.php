<?php

namespace Mlk\Share\Services;

use Illuminate\Support\Facades\Storage;

class ShareService
{
    public static function uploadImage($file, $folder)
    {
        $name = time() . '.' . $file->getClientOriginalExtension();
        Storage::disk('public')->putFileAs('images', $file, $name);

        $path = asset('storage/images/' . $folder . '/' . $name);

        return [$name, $path];
    }
}
