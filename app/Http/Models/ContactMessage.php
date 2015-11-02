<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = ['name', 'mail', 'subject', 'body'];
}
