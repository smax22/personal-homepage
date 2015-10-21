<?php
namespace App\Http\Controllers;

use Auth;
use App\Admin;
use App\Login;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller {
	public function getIndex() {
		$posts = Post::orderBy('created_at', 'desc')
			->take(5)
			->get();
		return view('admin/index', ['posts' => $posts]);
	}

	public function getLogin() {
		return view('admin/login');
	}

	public function postLogin(Request $request) {
		$this->validate($request, [
			'admin-name' => 'required',
			'admin-password' => 'required'
		]);
		
		$ip = $_SERVER['REMOTE_ADDR'];

		$login = new Login();
		$login->ip = $ip;
		if (!Auth::attempt(['name' => $request['admin-name'], 'password' => $request['admin-password']])) {
			
			$login->was_successful = 0;
			$login->save();
			return redirect()->back();
		}

		$login->was_successful = 1;
		$login->save();
		return redirect()->route('admin.index');
	}

	public function getLogout() {
		Auth::logout();
		return redirect()->route('admin.login');
	}
}