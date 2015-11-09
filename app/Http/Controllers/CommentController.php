<?php
namespace App\Http\Controllers;

use App\Http\Contracts\CommentRepositoryInterface;
use Illuminate\Http\Request;

class CommentController extends Controller {
    /**
     * CommentController constructor.
     */
    public function __construct(CommentRepositoryInterface $comment)
    {
        $this->comment = $comment;
    }

    public function getCommentIndex() {
        return view('admin.comments');
    }

    public function postCreateComment(Request $request) {
        // Validation
        $this->validate($request, [
            'author' => 'required|max:120',
            'body' => 'required|max:800'
        ]);

        $commentable_id = $request['post_id'];
        $comment_data = [
            'author' => $request['author'],
            'body' => $request['body']
        ];
        // Insert into DB
        $this->comment->createComment($commentable_id, $comment_data);
        return redirect()->back();
    }

    public function getDeleteComment($comment_id) {
        $this->comment->deleteComment($comment_id);

        return redirect()->back()->with(['success' => 'Comment deleted']);
    }
}