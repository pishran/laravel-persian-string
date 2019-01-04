<?php

namespace Pishran\LaravelPersianString;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Pishran\PersianString\PersianString;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/persian-string.php' => config_path('persian-string.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/persian-string.php', 'persian-string'
        );

        $this->app->singleton('PersianString', function () {
            $persianString = new PersianString(true);

            $persianString->addRules(
                config('persian-string.rules')
            );

            return $persianString;
        });
    }
}
