<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public function users() {
        return $this->hasMany('App\Http\Models\User');
    }
}
