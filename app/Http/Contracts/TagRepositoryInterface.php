<?php
namespace App\Http\Contracts;

interface TagRepositoryInterface {
    public function createTag($name);

    public function deleteTag($id);

    public function showAsFilter($id, $show = true);

    public function getAllTags($only_show_as_filter = false);
}