<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class Testprovider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        App::bind('new',function(){
        });  

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
