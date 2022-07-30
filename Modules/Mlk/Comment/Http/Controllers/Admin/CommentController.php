<?php

namespace Mlk\Comment\Http\Controllers\Admin;

use Mlk\Comment\Models\Comment;
use Mlk\Comment\Repositories\CommentRepo;
use Mlk\Share\Http\Controllers\Controller;

class CommentController extends Controller
{
    private string $class = Comment::class;

    public CommentRepo $repo;

    public function __construct(CommentRepo $commentRepo)
    {
        $this->repo = $commentRepo;
    }

    public function index()
    {
        $this->authorize('manage', $this->class);
        $comments = $this->repo->index()->paginate(10);

        return view('Comment::Admin.index', compact('comments'));
    }

    public function destroy($id)
    {
        $this->authorize('manage', $this->class);
        $this->repo->delete($id);

        toast('حذف کامنت','success');
        return to_route('comments.index');
    }

    public function active($id)
    {
        $this->authorize('manage', $this->class);
        $this->repo->changeStatus($id, Comment::STATUS_ACTIVE);

        alert()->success('فعال کردن وضعیت کامنت', 'عملیات با موفقیت انجام شد')->persistent('باشه');
        return to_route('comments.index');
    }

    public function inactive($id)
    {
        $this->authorize('manage', $this->class);
        $this->repo->changeStatus($id, Comment::STATUS_INACTIVE);

        alert()->success('غیر فعال کردن وضعیت کامنت', 'عملیات با موفقیت انجام شد')->autoClose(5000);
        return to_route('comments.index');
    }
}
