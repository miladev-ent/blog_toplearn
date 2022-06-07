<?php

namespace Mlk\Article\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Mlk\Role\Models\Permission;
use Mlk\User\Models\User;

class ArticlePolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function manage(User $user)
    {
        if ($user->hasPermissionTo(Permission::PERMISSION_ARTICLES)) {
            return true;
        }
    }
}
