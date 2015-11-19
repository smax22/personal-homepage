<?php
namespace App\Http\Contracts;

interface PostRepositoryInterface {
    public function getPost($id);

    public function getAllPosts($filter_only_show_published = false);

    public function getPostsByTag($tag, $filter_only_show_published = false);

    public function createOrUpdatePost($id, $post_data);

    public function deletePost($id);

    public function relatePosts($source_post_id, $target_post_id);

    public function unrelatePosts($source_post_id, $target_post_id);

    public function sharePost($id);

    public function attachTagsToPost($id, $tags);

    public function changePublishState($id, $state);
}