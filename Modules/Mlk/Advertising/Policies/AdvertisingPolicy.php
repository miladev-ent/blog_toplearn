<?php

namespace Mlk\Advertising\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

class AdvertisingPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
