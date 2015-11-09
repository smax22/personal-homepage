<?php
namespace App\Http\Repositories;

use App\Http\Contracts\PostRepositoryInterface;
use App\Http\Models\Post;
use App\Http\Models\Tag;

class PostRepository implements PostRepositoryInterface {
    public function getPost($id)
    {
        return Post::find($id);
    }

    public function getAllPosts()
    {
        return Post::orderBy('created_at', 'desc')->get();
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
        if (!isset($tag)) {
            return redirect()->route('blog.index');
        }

        $tag = str_replace('# ', '', $tag);

        $posts = Tag::where('name', $tag)->first()->posts;
        return $posts;
    }

    public function createOrUpdatePost($id, $post_data)
    {
        if (is_null($id)) {
            $post = new Post();
        } else {
            $post = Post::find($id);
        }

        $tags = explode(',', $post_data['tags']);

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

        $this->attachTagsToPost($post->id, $tags);

        return true;
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        $post->delete();
        return true;
    }

    public function relatePosts($source_post_id, $target_post_id)
    {
        $source_post = Post::find($source_post_id);
        $target_post = Post::find($target_post_id);

        $source_post->related_posts()->attach($target_post);
    }

    public function unrelatePosts($source_post_id, $target_post_id)
    {
        $source_post = Post::find($source_post_id);
        $target_post = Post::find($target_post_id);

        $source_post->related_posts()->detach($target_post);
    }

    public function sharePost($id)
    {
        // TODO: Implement sharePost() method.
    }

    public function attachTagsToPost($id, $tags)
    {
        $post = Post::find($id);
        foreach ($tags as $tag) {
            $tag = Tag::where('name', $tag)->first();
            $post->tags()->save($tag);
        }
    }

}