<?php


namespace Actuallyconnor\LaravelHarvestApi\Harvest;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\ClientsApi;
use Illuminate\Support\Facades\Facade;

class ClientsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ClientsApi::class;
    }
}
