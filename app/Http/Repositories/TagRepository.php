<?php

namespace App\Http\Repositories;

use App\Http\Contracts\TagRepositoryInterface;
use App\Http\Models\Tag;

class TagRepository implements TagRepositoryInterface {
    public function createTag($name)
    {
        $tag = new Tag();
        $tag->name = $name;
        $tag->save();
    }

    public function deleteTag($id)
    {
        $tag = Tag::find($id);
        $tag->posts()->detach();
        $tag->delete();
    }

    public function showAsFilter($id, $show = true)
    {
        $tag = Tag::find($id);
        $tag->show_as_filter = $show;
        $tag->update();
    }

    public function getAllTags($only_show_as_filter = false)
    {
        return Tag::where('show_as_filter', $only_show_as_filter)->get();
    }

}