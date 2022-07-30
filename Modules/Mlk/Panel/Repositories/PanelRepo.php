<?php

namespace Mlk\Panel\Repositories;

use Mlk\Article\Models\Article;
use Mlk\Category\Models\Category;
use Mlk\Comment\Models\Comment;
use Mlk\Role\Models\Permission;
use Mlk\User\Models\User;

class PanelRepo
{
    public function user_count()
    {
        return User::query()->count();
    }

    public function article_count()
    {
        return Article::query()->count();
    }

    public function comment_count()
    {
        return Comment::query()->count();
    }

    public function cat_count()
    {
        return Category::query()->count();
    }

    public function getLatestAuthorUsers()
    {
        return User::query()->permission(Permission::PERMISSION_AUTHORS)->latest()->limit(4)->get();
    }

    public function getLatestArticles()
    {
        return Article::query()->latest()->limit(10)->get();
    }
}
