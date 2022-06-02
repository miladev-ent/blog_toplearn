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

    private function query(): \Illuminate\Database\Eloquent\Builder
    {
        return Category::query();
    }
}
