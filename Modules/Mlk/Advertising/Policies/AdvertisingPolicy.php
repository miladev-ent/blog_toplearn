<?php

namespace Mlk\Advertising\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Mlk\Role\Models\Permission;
use Mlk\User\Models\User;

class AdvertisingPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function index(User $user)
    {
        if ($user->hasPermissionTo(Permission::PERMISSION_ADVERTISINGS)) {
            return true;
        }
    }
}
