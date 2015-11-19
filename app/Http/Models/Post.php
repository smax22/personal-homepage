<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'body', 'excerpt', 'allow_comments', 'published', 'main_image'];

    public function comments() {
        return $this->morphMany('App\Http\Models\Comment', 'commentable');
    }

    public function tags() {
        return $this->morphToMany('App\Http\Models\Tag', 'taggable');
    }

    public function related_posts() {
        return $this->belongsToMany('App\Http\Models\Post', 'related_posts', 'source_post_id', 'target_post_id');
    }
}
