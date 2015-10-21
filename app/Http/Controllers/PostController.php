<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller {
	const NUMBER_OF_SNIPPETS = 6;

	public function getCreate() {
		return view('post/edit');
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
		$posts = Post::orderBy('created_at', 'desc')->get();
		return view('post/showAll', ['posts' => $posts]);
	}

	public function getSnippets() {
		$posts = Post::orderBy('created_at', 'desc')->take(self::NUMBER_OF_SNIPPETS)->get();
		foreach ($posts as $post) {
			$post->body = self::shorten_string($post->body, 40);
		}
		return view('blog/index', ['posts' => $posts]);
	}

	public function getShow($postId) {
		if (!isset($postId)) {
			return redirect()->route('home');
		}
		$post = Post::where('id', $postId)->first();

		return view('post.show', ['post' => $post]);
	}

	public function getEdit($postId) {
		if (!isset($postId)) {
			return redirect()->route('home');
		}
		$post = Post::where('id', $postId)->first();

		return view('post/edit', ['post' => $post]);
	}

	public function postEdit(Request $request) {
		if (!isset($request['id'])) {
			return redirect()->route('home');
		}
		$id = $request['id'];
		$post = Post::where('id', $id)->first();
		$post->title = $request['title'];
		$post->author = $request['author'];
		$post->body = $request['content'];
		$post->update();
		return redirect()->back();
	}

	public function getDelete($postId) {
		if (!isset($postId)) {
			return redirect()->route('home');
		}
		$deletedRows = Post::where('id', $postId)->delete();

		return redirect()->back();
	}

	public function getPublish($postId, $publishState) {
		if (!isset($postId) || !isset($publishState)) {
			return redirect()->route('home');
		}
		$post = Post::where('id', $postId)->first();
		$post->published = $publishState;
		$post->update();
		return redirect()->back();
	}

	private static function shorten_string($oldstring, $wordsreturned)
	{
		$retval = "";
		$string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $oldstring);
		$string = str_replace("\n", " ", $string);
		$array = explode(" ", $string);
		if (count($array)<=$wordsreturned)
		{
			$retval = implode(" ", $array);
		}
		else
		{
			array_splice($array, $wordsreturned);
			$retval = implode(" ", $array)." ...";
		}
		return $retval;
	}
}