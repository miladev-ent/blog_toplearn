<?php

namespace Mlk\Role\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Mlk\Role\Models\Permission;
use Mlk\User\Models\User;

class RolePolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function index(User $user)
    {
        if ($user->hasPermissionTo(Permission::PERMISSION_ROLES)) {
            return true;
        }
    }
}
