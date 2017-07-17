<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PropertyProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\PropertyService', 'App\Services\Impl\PropertyServiceImpl');
    }
}
