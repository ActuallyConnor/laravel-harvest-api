<?php

namespace Actuallyconnor\LaravelHarvestApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Actuallyconnor\LaravelHarvestApi\LaravelHarvestApi
 */
class LaravelHarvestApiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return LaravelHarvestApi::class;
    }
}
