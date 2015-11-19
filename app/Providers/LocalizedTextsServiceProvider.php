<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LocalizedTextsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('App\\Http\\Contracts\\LocalizedTextsRepositoryInterface', 'App\\Http\\Repositories\\LocalizedTextsRepository');
    }

}