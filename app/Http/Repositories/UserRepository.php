<?php
namespace App\Http\Repositories;

use App\Http\Contracts\UserRepositoryInterface;
use Auth;

class UserRepository implements UserRepositoryInterface {
    public function login($name, $password)
    {
        return Auth::attempt(['name' => $name, 'password' => $password]);
    }

    public function logout()
    {
        return Auth::logout();
    }

    public function getCurrentUser()
    {
        return Auth::user();
    }

    public function isLoggedIn()
    {
        return Auth::check();
    }

}