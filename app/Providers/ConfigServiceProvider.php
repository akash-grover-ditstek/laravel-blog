<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\WebConfig;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\WebConfig', function ($app) {
            return new WebConfig();
        });
    }
}
