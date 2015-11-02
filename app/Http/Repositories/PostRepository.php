<?php
namespace App\Http\Repositories;

use App\Http\Contracts\PostRepositoryInterface;
use App\Http\Models\Post;

class PostRepository implements PostRepositoryInterface {
    public function getPost($id)
    {
        return Post::find($id);
    }

    public function getAllPosts()
    {
        return Post::all();
    }

    public function changePublishState($id, $state)
    {
        $post = Post::find($id);

        $post->published = $state;

        $post->update();

        return true;
    }

    public function getPostsByTag($tag)
    {
        // TODO: Implement getPostsByTag() method.
    }

    public function getPostsBySearch($search)
    {
        // TODO: Implement getPostsBySearch() method.
    }

    public function createOrUpdatePost($id, $post_data)
    {
        if (is_null($id)) {
            $post = new Post();
        } else {
            $post = Post::find($id);
        }

        $post->title = $post_data['title'];
        $post->author = $post_data['author'];
        $post->body = $post_data['body'];
        $post->excerpt = $post_data['excerpt'];
        $post->allow_comments = $post_data['allow_comments'];
        $post->published = false;

        if (is_null($id)) {
            $post->save();
        } else {
            $post->update();
        }

        return true;
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
        return true;
    }

    public function relatePosts($source_post_id, $target_post_id)
    {
        // TODO: Implement relatePosts() method.
    }

    public function sharePost($id)
    {
        // TODO: Implement sharePost() method.
    }

    public function attachTagsToPost($id, $tags)
    {
        // TODO: Implement attachTagsToPost() method.
    }

}