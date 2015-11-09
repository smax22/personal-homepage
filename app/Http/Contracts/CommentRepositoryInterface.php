<?php
namespace App\Http\Contracts;

interface CommentRepositoryInterface {
    public function createComment($commentable_id, $comment_data);

    public function deleteComment($id);

    public function getAllComments();
}