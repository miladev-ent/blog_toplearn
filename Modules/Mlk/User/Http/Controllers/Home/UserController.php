<?php

namespace Mlk\User\Http\Controllers\Home;

use Mlk\Article\Repositories\ArticleRepo;
use Mlk\Role\Models\Permission;
use Mlk\Share\Http\Controllers\Controller;
use Mlk\Share\Repositories\ShareRepo;
use Mlk\Share\Services\ShareService;
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
        if ($request->image) {
            [$imageName, $imagePath] = ShareService::uploadImage($request->file('image'), 'users');
        } else {
            $imageName = auth()->user()->imageName;
            $imagePath = auth()->user()->imagePath;
        }

        $userService->updateProfile($request, auth()->id(), $imageName, $imagePath);

        ShareRepo::successMessage('بروزرسانی پروفایل کاربری');
        return back();
    }
}
