<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AllanServiceProvider extends ServiceProvider
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
        app()->bind('name',function (){
            return new \App\Allan\Allan;
        });
    }
}
