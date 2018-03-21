<?php

namespace Skadevz\LaravelIndonesia;

use Illuminate\Support\ServiceProvider;

class BahasaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Mengaktifkan Helper
         * 
         */
        require_once __DIR__.'/helpers/general_helpers.php';
        
        /**
        * Publish Views Bahasa Indonesia
        *
        */
        $this->publishes([ __DIR__.'/resources/lang/id' => resource_path('lang/id') ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
