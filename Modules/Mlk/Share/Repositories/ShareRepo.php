<?php

namespace Mlk\Share\Repositories;

class ShareRepo
{
    public static function successMessage($title, $body = 'عملیات با موفقیت انجام شد')
    {
        return alert()->success($title, $body);
    }
}
