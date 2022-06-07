<?php

namespace Mlk\Article\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }
}
