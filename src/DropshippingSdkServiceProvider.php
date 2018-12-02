<?php

namespace Aliexpress\DropshippingSdk;

use Illuminate\Support\ServiceProvider;

class DropshippingSdkServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'aliexpress');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'aliexpress');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        require(__DIR__ . 'Junk/TopSdk.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/dropshippingsdk.php', 'dropshippingsdk');

        // Register the service the package provides.
        $this->app->singleton('dropshippingsdk', function ($app) {
            return new DropshippingSdk;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['dropshippingsdk'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/dropshippingsdk.php' => config_path('dropshippingsdk.php'),
        ], 'dropshippingsdk.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/aliexpress'),
        ], 'dropshippingsdk.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/aliexpress'),
        ], 'dropshippingsdk.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/aliexpress'),
        ], 'dropshippingsdk.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
