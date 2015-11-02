<?php

namespace App\Http\Contracts;

interface UserRepositoryInterface {
    public function login($name, $password);

    public function logout();

    public function getCurrentUser();

    public function isLoggedIn();
}