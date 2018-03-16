<?php

namespace euro_hms\Providers;

use Illuminate\Support\ServiceProvider;
use euro_hms\Services\AgeGroupService;
use euro_hms\Repositories\AgeGroupRepository;

class AgeGroupServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the Application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the Application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('euro_hms\Contracts\AgeGroupContract', function ($app) {
            return new AgeGroupService(new AgeGroupRepository());
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['euro_hms\Contracts\AgeContract'];
    }
}
