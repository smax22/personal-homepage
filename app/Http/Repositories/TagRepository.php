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
        if ($only_show_as_filter) {
            return Tag::where('show_as_filter', 1)->get();
        }
        return Tag::all();
    }

}