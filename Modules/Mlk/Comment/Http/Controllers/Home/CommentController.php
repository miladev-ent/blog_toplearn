<?php

namespace Mlk\Comment\Http\Controllers\Home;

use Mlk\Comment\Http\Requests\CommentRequest;
use Mlk\Comment\Services\CommentService;
use Mlk\Share\Http\Controllers\Controller;
use Mlk\Share\Repositories\ShareRepo;

class CommentController extends Controller
{
    public function store(CommentRequest $request, CommentService $commentService)
    {
        $commentService->store($request);

        ShareRepo::successMessage('نظر شما پس از تایید در سایت نمایش داده میشود');
        return back();
    }
}
