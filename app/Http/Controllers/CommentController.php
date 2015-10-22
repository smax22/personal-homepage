<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller {
	public function postCreate(Request $request) {
		$this->validate($request, [
			'author' => 'required|max:120',
			'body' => 'required|max:1000'
		]);

		if (!isset($request['postId'])) {
			return redirect()->back();
		}

		$postId = $request['postId'];
		$post = Post::where('id', $postId)->first();

		$comment = new Comment();
		$comment->author = $request['author'];
		$comment->body = $request['body'];
		$post->comments()->save($comment);
		return redirect()->back();
	}
}