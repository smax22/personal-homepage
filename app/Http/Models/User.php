<?php

namespace App\Http\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    protected $fillable = ['name', 'password', 'remember_token'];

    public function roles() {
        return $this->belongsTo('App\Http\Models\Role');
    }
}
