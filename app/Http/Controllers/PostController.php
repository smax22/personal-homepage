<?php

namespace App\Http\Controllers;
use App\Http\Contracts\PostRepositoryInterface;
use Illuminate\Http\Request;

class PostController extends Controller {

    /**
     * PostConroller constructor.
     */
    public function __construct(PostRepositoryInterface $post)
    {
        $this->post = $post;
    }

    public function getPostIndex() {
        return view('admin.posts');
    }

    public function getViewPost($post_id) {
        $post = $this->post->getPost($post_id);
        return view('admin.view_post', ['post' => $post]);
    }

    public function getCreatePost() {
        return view('admin.edit');
    }

    public function postCreatePost(Request $request) {
        // Validate
        $this->validate($request, [
            'title' => 'required|max:140|unique:posts',
            'author' => 'required|max:80',
            'body' => 'required',
            'excerpt' => 'required'
        ]);

        $post_data = [
            'title' => $request['title'],
            'author' => $request['author'],
            'body' => $request['body'],
            'excerpt' => $request['excerpt'],
            'allow_comments' => isset($request['allow_comments']) ? $request['allow_comments'] : false,
            'tags' => $request['tags']
        ];

        // Create in database
        if (!$this->post->createOrUpdatePost(null, $post_data)) {
            return redirect()->back()->with(['failure' => 'Error during creation!']);
        }

        // Redirect
        return redirect()->route('admin.dashboard')->with(['success' => 'Successfully created post!']);
    }

    public function getChangePublishState($post_id, $state) {
        $this->post->changePublishState($post_id, $state);
        return redirect()->back()->with(['success' => 'Publish state changed!']);
    }

    public function getEditPost($post_id) {
        $post = $this->post->getPost($post_id);
        $tags = [];
        foreach ($post->tags as $tag) {
            array_push($tags, $tag->name);
        }
        $tags = implode(',', $tags);
        $post->tags = $tags;
        return view('admin.edit', ['post' => $post]);
    }
    public function postUpdatePost(Request $request) {
        if (!isset($request['post_id'])) {
            return redirect()->back()->with(['failure' => 'Post could not be updated!']);
        }

        $post = $this->post->getPost($request['post_id']);
        // Validate
        if ($request['title'] !== $post->title) {
            $this->validate($request, [
                'title' => 'required|max:140|unique',
            ]);
        }

        $this->validate($request, [
            'author' => 'required|max:80',
            'body' => 'required',
            'excerpt' => 'required'
        ]);

        $post_data = [
            'title' => $request['title'],
            'author' => $request['author'],
            'body' => $request['body'],
            'excerpt' => $request['excerpt'],
            'allow_comments' => isset($request['allow_comments']) ? $request['allow_comments'] : false,
            'tags' => $request['tags']
        ];

        // Create in database
        if (!$this->post->createOrUpdatePost($post->id, $post_data)) {
            return redirect()->back()->with(['failure' => 'Error during updating!']);
        }

        // Redirect
        return redirect()->route('admin.dashboard')->with(['success' => 'Successfully updated post!']);
    }

    public function postAddRelationship(Request $request) {
        $this->validate($request, [
           'source-post' => 'required',
           'target-post' => 'required',
        ]);
        $source_post_id = explode(' | ', $request['source-post'])[0];
        $target_post_id = explode(' | ', $request['target-post'])[0];
        $this->post->relatePosts($source_post_id, $target_post_id);
        return redirect()->route('post.index')->with(['success' => 'Relationship added!']);
    }

    public function getRemoveRelationship($source_post_id, $target_post_id) {
        $this->post->unrelatePosts($source_post_id, $target_post_id);
        return redirect()->back()->with(['success' => 'Relationship removed!']);
    }

    public function getDeletePost($post_id) {
        $this->post->deletePost($post_id);
        return redirect()->back()->with(['success' => 'Successfully deleted post!']);
    }
}