<?php

namespace Mlk\Article\Services;

use File;
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

    public function deleteImage($article)
    {
//        if (File::exists(public_path('storage/images/' . $article->imageName))) {
//            return File::delete(public_path('storage/images/' . $article->imageName));
//        }
        if (Storage::disk('public')->exists('images/' . $article->imageName)) {
            return Storage::disk('public')->delete('images/' . $article->imageName);
        }

        return null;
    }

    public function changeStatus($article)
    {
        if ($article->status === Article::STATUS_ACTIVE) {
            return $article->update(['status' => Article::STATUS_INACTIVE]);
        }

        return $article->update(['status' => Article::STATUS_ACTIVE]);
    }

    private function makeSlug($title)
    {
        $url = str_replace('_', '', $title);
        return preg_replace('/\s+/', '-', $url);
    }
}
