<?php

namespace App\Http\Controllers;

use App\Http\Contracts\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller {

    /**
     * UserController constructor.
     */
    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function getUserLogin() {
        return view('admin.login');
    }

    public function getDashboard() {
        return view('admin.dashboard');
    }

    public function postUserLogin(Request $request) {
        // Validate
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required'
        ]);
        // Login
        if (!$this->user->login($request['name'], $request['password'])) {
            return redirect()->back();
        }

        // Success
        return redirect()->route('admin.dashboard');
    }

    public function getUserLogout() {
        $this->user->logout();
        return redirect()->route('admin.login');
    }
}