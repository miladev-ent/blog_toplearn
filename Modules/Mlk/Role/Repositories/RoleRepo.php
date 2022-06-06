<?php

namespace Mlk\Role\Repositories;

use Spatie\Permission\Models\Role;

class RoleRepo
{
    public function findById($id)
    {
        return $this->query()->findOrFail($id);
    }

    public function index()
    {
        return $this->query()->latest();
    }

    public function delete($id)
    {
        return $this->query()->whereId($id)->delete();
    }

    private function query()
    {
        return Role::query();
    }
}
