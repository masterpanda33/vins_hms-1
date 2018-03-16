<?php

namespace euro_hms\Api\Providers;

use Illuminate\Support\ServiceProvider;
use euro_hms\Api\Services\UserService;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the Laraspacelication services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('euro_hms\Api\Contracts\UserContract', function ($app) {
            return new UserService();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['euro_hms\Api\Contracts\UserContract'];
    }
}
