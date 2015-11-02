<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Shareable extends Model
{
    protected $fillable = ['medium'];

    public function shareable() {
        return $this->morphTo();
    }
}
