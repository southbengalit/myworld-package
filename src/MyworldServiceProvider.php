<?php

namespace  Myworld\Ikigai;

use Illuminate\Support\ServiceProvider;

class MyworldServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
         // register our controller
    $this->app->make('Myworld\Ikigai\TestController');
    $this->loadViewsFrom(__DIR__.'/views', 'ikigai');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
         //
    include __DIR__.'/routes.php';

    }
}
