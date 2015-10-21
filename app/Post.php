<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = ['title', 'author', 'body', 'allow_comments'];

    public function comments() {
    	return $this->hasMany('App\Comment');
    }
}
