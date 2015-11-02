<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['title', 'author', 'body'];

    public function commentable() {
        return $this->morphTo();
    }
}
