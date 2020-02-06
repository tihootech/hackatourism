<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        \Blade::if('master', function () {
            return isMaster();
        });
        \Blade::if('artisan', function () {
            return isArtisan() || isMaster();
        });
        \Blade::if('onlyartisan', function () {
            return isArtisan();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
