<?php

namespace BrocardJr\Sweet\Alerts;

use Illuminate\Support\ServiceProvider;

class AlertServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'Alerts');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/helpers.php';
    }
}
