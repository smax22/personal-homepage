<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'body', 'excerpt', 'allow_comments', 'published'];

    public function comments() {
        return $this->morphMany('App\Http\Models\Comment', 'commentable');
    }

    public function tags() {
        return $this->morphToMany('App\Http\Models\Tag', 'taggable');
    }
}
