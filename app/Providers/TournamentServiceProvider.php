<?php

namespace euro_hms\Providers;

use Illuminate\Support\ServiceProvider;
use euro_hms\Services\TournamentService;
use euro_hms\Services\VenueTempService as VenueService;
use euro_hms\Repositories\VenueRepository;
use euro_hms\Repositories\TournamentRepository;

class TournamentServiceProvider extends ServiceProvider
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
        $this->app->bind('euro_hms\Contracts\TournamentContract', function ($app) {
            return new TournamentService(new TournamentRepository(), new VenueService(new VenueRepository()));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['euro_hms\Contracts\TournamentContract'];
    }
}
