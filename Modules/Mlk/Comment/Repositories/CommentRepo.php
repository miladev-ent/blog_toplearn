<?php

namespace Mlk\Comment\Repositories;

use Mlk\Comment\Models\Comment;

class CommentRepo
{
    public function index()
    {
        return $this->query()->latest();
    }

    public function delete($id)
    {
        return $this->query()->where('id', $id)->delete();
    }

    public function findById($id)
    {
        return $this->query()->findOrFail($id);
    }

    public function changeStatus($id, $status)
    {
//        $comment = $this->findById($id);
//        return $comment->update(['status' => $status]);
        return $this->findById($id)->update(['status' => $status]);
    }

    public function getLatestComments()
    {
        return $this->query()->where('status', Comment::STATUS_ACTIVE)->latest();
    }

    private function query()
    {
        return Comment::query();
    }

//    public function active($id)
//    {
//        $comment = $this->findById($id);
//        return $comment->update(['status' => Comment::STATUS_ACTIVE]);
//    }
//
//    public function inactive($id)
//    {
//        return $this->findById($id)->update(['status' => Comment::STATUS_INACTIVE]);
//    }
}
