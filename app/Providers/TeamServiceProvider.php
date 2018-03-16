<?php

namespace euro_hms\Providers;

use Illuminate\Support\ServiceProvider;
use euro_hms\Services\TeamService;
use euro_hms\Repositories\TeamRepository;

class TeamServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
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
        $this->app->bind('euro_hms\Contracts\TeamContract', function ($app) {
            return new TeamService(new TeamRepository());
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['euro_hms\Contracts\TeamContract'];
    }
}
