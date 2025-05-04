<?php

namespace WoTVenxie\TruckersMPApiClient\Facades;

use Illuminate\Support\Facades\Facade;

class TruckersMP extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'truckersmp';  // This matches the binding in the service provider
    }
}
