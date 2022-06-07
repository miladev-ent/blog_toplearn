<?php

namespace Mlk\Article\Services;

use Illuminate\Support\Facades\Storage;
use Mlk\Article\Models\Article;

class ArticleService
{
    public function store($request, $user_id, $imageName, $imagePath)
    {
        return Article::query()->create([
            'user_id' => $user_id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $this->makeSlug($request->title),
            'time_to_read' => $request->time_to_read,
            'imageName' => $imageName,
            'imagePath' => $imagePath,
            'score' => $request->score,
            'status' => $request->status,
            'type' => $request->type,
            'body' => $request->body,
            'keywords' => $request->keywords,
            'description' => $request->description,
        ]);
    }

    public function update($request, $id, $imageName, $imagePath)
    {
        return Article::query()->whereId($id)->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $this->makeSlug($request->title),
            'time_to_read' => $request->time_to_read,
            'imageName' => $imageName,
            'imagePath' => $imagePath,
            'score' => $request->score,
            'status' => $request->status,
            'type' => $request->type,
            'body' => $request->body,
            'keywords' => $request->keywords,
            'description' => $request->description,
        ]);
    }

    public function uploadImage($file)
    {
        $name = time() . '.' . $file->getClientOriginalExtension();
        Storage::disk('public')->putFileAs('images', $file, $name);

        $path = asset('storage/images/' . $name);

        return [$name, $path];
    }

    private function makeSlug($title)
    {
        $url = str_replace('_', '', $title);
        return preg_replace('/\s+/', '-', $url);
    }

    public function deleteImage($article)
    {
        //
    }
}
