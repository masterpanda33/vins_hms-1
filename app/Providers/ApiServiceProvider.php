<?php

namespace euro_hms\Providers;

use Illuminate\Support\ServiceProvider;
use euro_hms\Services\ApiService;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register()
    {
        //$app = app();
        //$app->bind('helloworld','App\Contracts\ApiContract');
        //$dispatcherObj = app('Dingo\Api\Dispatcher');

        $this->app->bind('euro_hms\Contracts\ApiContract', function ($app) {
            return new ApiService();
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['euro_hms\Contracts\ApiContract'];
    }
}
