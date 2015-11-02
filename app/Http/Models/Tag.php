<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Tagable extends Model
{
    protected $fillable = ['name'];

    public function posts() {
        return $this->morphedByMany('App\Http\Models\Post', 'taggable');
    }
}
