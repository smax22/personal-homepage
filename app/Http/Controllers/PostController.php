<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {
	public function getCreate() {
		return view('post/create');
	}

	public function postCreate(Request $request) {
		// Validate input
		$this->validate($request, [
			'title' => 'required|max:120|unique:posts',
			'author' => 'required|max:120',
			'content' => 'required|'
		]);
		// If validated: Write to database
		$post = new Post();
		$post->title = $request['title'];
		$post->author = $request['author'];
		$post->body = $request['content'];
		if (isset($request['allow_comments'])) {
			$post->allow_comments = 1;
		} else {
			$post->allow_comments = 0;
		}
		$post->save();

		//Redirect to dashboard
		return redirect()->route('admin.index');
	}

	public function getShowAll() {

	}

	public function getShow($postId) {
		
	}

	public function getEdit($postId) {

	}

	public function postEdit($postId) {

	}

	public function getDelete($postId) {

	}

	public function postPublish($postId) {

	}
}