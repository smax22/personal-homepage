<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model {
	protected $fillable = ['was_successful', 'ip'];
}