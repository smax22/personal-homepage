<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TagServiceProvider extends ServiceProvider {
    public function register()
    {
        $this->app->bind('App\\Http\\Contracts\\TagRepositoryInterface', 'App\\Http\\Repositories\\TagRepository');
    }

}