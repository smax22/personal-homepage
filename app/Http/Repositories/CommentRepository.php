<?php

namespace App\Http\Repositories;

use App\Http\Contracts\CommentRepositoryInterface;
use App\Http\Models\Comment;
use App\Http\Models\Post;

class CommentRepository implements CommentRepositoryInterface {
    public function getAllComments() {
        return Comment::all();
    }

    public function createComment($commentable_id, $comment_data)
    {
        $comment = new Comment();
        $comment->title = $comment_data['title'];
        $comment->author = $comment_data['author'];
        $comment->body = $comment_data['body'];
        $post = Post::find($commentable_id);
        return $post->comments()->save($comment);
    }

    public function deleteComment($id)
    {
        return Comment::find($id)->delete();
    }
}