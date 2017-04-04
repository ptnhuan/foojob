<?php

namespace Admin;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;


class AdminServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Request $request) {
        /**
         * Publish
         */
         $this->publishes([
            __DIR__.'/config/admin_admin.php' => config_path('admin_admin.php'),
        ],'config');

        $this->loadViewsFrom(__DIR__ . '/views', 'admin');

         $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('migrations')
            ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';

        /**
         * Load controllers
         */
        $this->app->make('Admin\Controllers\AdminController');

         /**
         * Load Views
         */
        $this->loadViewsFrom(__DIR__ . '/views', 'admin');
    }
}