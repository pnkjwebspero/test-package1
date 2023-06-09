<?php

namespace Webspero\Changepage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class HomePageServiceProvider extends ServiceProvider
{
    public function boot()
    {
       include __DIR__.'/routes.php';
    }

    public function register()
    {
        $this->app->make('Webspero\Changepage\HomePageController');
        $this->loadViewsFrom(__DIR__.'/views','changepage');
    }
}
