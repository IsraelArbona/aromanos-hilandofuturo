<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        if (!defined('ADMIN')) {
           define('ADMIN', config('variables.APP_ADMIN', 'admin'));
        }

        REDIRECT_HTTPS = true

        if(env('REDIRECT_HTTPS'))
        {
            \URL::forceScheme('http');
        }

        */

        \Carbon\Carbon::setLocale(config('app.locale'));
        require_once base_path('resources/macros/form.php');
        Schema::defaultStringLength(191);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
