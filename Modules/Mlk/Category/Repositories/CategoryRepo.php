<?php

namespace Mlk\Category\Repositories;

use Mlk\Category\Models\Category;

class CategoryRepo
{
    public function index()
    {
        return $this->query()->latest();
    }

    public function findById($id)
    {
        return $this->query()->findOrFail($id);
    }

    public function delete($id)
    {
        return $this->query()->where('id', $id)->delete();
    }

    public function changeStatus($category)
    {
        if ($category->status === Category::STATUS_ACTIVE) {
            return $category->update(['status' => Category::STATUS_INACTIVE]);
        }
        return $category->update(['status' => Category::STATUS_ACTIVE]);
    }

    public function getActiveCategories()
    {
        return $this->query()->where('status', Category::STATUS_ACTIVE)->latest();
    }
    private function query(): \Illuminate\Database\Eloquent\Builder
    {
        return Category::query();
    }
}
