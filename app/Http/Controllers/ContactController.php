<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller {
	public function getIndex() {
		return view('contact/index');
	}
}