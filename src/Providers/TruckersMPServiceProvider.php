<?php

namespace WoTVenxie\TruckersMPApiClient\Providers;

use Illuminate\Support\ServiceProvider;
use WoTVenxie\TruckersMPApiClient\Services\TruckersMPService;

class TruckersMPServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('truckersmp', function ($app) {
            return new TruckersMPService(new \GuzzleHttp\Client());
        });
    }

    public function boot()
    {
        //
    }
}
