<?php

namespace Mlk\User\Repositories\Home;

use Mlk\Role\Models\Permission;
use Mlk\User\Models\User;

class UserRepo
{
    public function authors()
    {
        return $this->query()->permission(Permission::PERMISSION_AUTHORS)->latest();
    }

    public function findByName($name)
    {
        return $this->query()->whereName($name);
    }

    private function query()
    {
        return User::query();
    }
}
