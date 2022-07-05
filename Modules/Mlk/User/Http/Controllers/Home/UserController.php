<?php

namespace Mlk\User\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Mlk\Article\Repositories\ArticleRepo;
use Mlk\Role\Models\Permission;
use Mlk\Share\Repositories\ShareRepo;
use Mlk\User\Http\Requests\UpdateProfileRequest;
use Mlk\User\Repositories\Home\UserRepo;
use Mlk\User\Services\UserService;

class UserController extends Controller
{
    public UserRepo $repo;

    public function __construct(UserRepo $userRepo)
    {
        $this->repo = $userRepo;
    }

    public function authors()
    {
        $authors = $this->repo->authors()->paginate(50);
        return view('User::Home.authors', compact('authors'));
    }

    public function author($name, ArticleRepo $articleRepo)
    {
        $author = $this->repo->findByName($name)->permission(Permission::PERMISSION_AUTHORS)->first();

        if (is_null($author)) abort(404);
        $articles = $articleRepo->getArticlesByUserId($author->id)->paginate(10);

        return view('User::Home.author', compact(['author', 'articles']));
    }

    public function profile()
    {
        return view('User::Home.profile');
    }

    public function updateProfile(UpdateProfileRequest $request, UserService $userService)
    {
        $userService->updateProfile($request, auth()->id());

        ShareRepo::successMessage('بروزرسانی پروفایل کاربری');
        return back();
    }
}
