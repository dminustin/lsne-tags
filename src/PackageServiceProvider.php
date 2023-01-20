<?php

namespace Dminustin\LSNE\TagsPackage;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', Package::PACKAGE_NAME);
        // $this->loadViewsFrom(__DIR__.'/../resources/views', Package::PACKAGE_NAME);
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->copyByDir(__DIR__ . '/../config/*.php', config_path(), 'config');
            // Registering package commands.
            // $this->commands([]);
        }
    }

    protected function copyByDir($searchMask, $toDir, $tag)
    {
        $migrations = glob($searchMask);
        $copy = [];
        foreach ($migrations as $migration) {
            $copy[$migration] = $toDir . basename($migration);
        }
        if (count($copy)) {
            $this->publishes($copy, $tag);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/' . Package::PACKAGE_NAME . '.php', Package::PACKAGE_NAME . '.php');

        // Register the main class to use with the facade
        $this->app->singleton(Package::PACKAGE_NAME, function () {
            return new Package();
        });
    }
}
