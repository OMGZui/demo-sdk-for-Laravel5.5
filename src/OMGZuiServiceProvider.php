<?php

namespace OMGZui\OMGZui;

use Illuminate\Support\ServiceProvider;

class OMGZuiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/omgzui.php' => config_path('omgzui.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('omgzui',function(){
            return $this->app->make('OMGZui\OMGZui\Demo');
        });
    }
}
