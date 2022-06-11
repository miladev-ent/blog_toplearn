<?php

namespace Mlk\Home\Repositories;

use Mlk\Article\Models\Article;

class HomeRepo
{
    public function vip_posts()
    {
        return Article::query()->where('status', Article::STATUS_ACTIVE)->whereType(Article::TYPE_VIP)->latest();
    }
}
