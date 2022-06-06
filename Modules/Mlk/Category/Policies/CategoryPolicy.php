<?php

namespace Mlk\Category\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Mlk\Role\Models\Permission;
use Mlk\User\Models\User;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function index(User $user)
    {
        if ($user->hasPermissionTo(Permission::PERMISSION_CATEGORIES)) {
            return true;
        }
    }
}
