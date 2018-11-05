<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        \Validator::extend('invalid email', function($attribute, $value, $parameters, $validator) {
            $allowedEmailDomains = ['diu.edu.bd'];
            return in_array( explode('@', $parameters[0])[1] , $allowedEmailDomains);
        });

        
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
