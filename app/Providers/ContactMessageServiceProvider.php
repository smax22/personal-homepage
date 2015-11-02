<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ContactMessageServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->bind('App\\Http\\Contracts\\ContactMessageRepositoryInterface', 'App\\Http\\Repositories\\ContactMessageRepository');
    }

}