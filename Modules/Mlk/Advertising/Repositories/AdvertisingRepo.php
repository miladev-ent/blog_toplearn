<?php

namespace Mlk\Advertising\Repositories;

use Mlk\Advertising\Models\Advertising;

class AdvertisingRepo
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

    private function query()
    {
        return Advertising::query();
    }
}
