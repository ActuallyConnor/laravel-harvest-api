<?php

namespace Actuallyconnor\LaravelHarvestApi\Harvest;

use Actuallyconnor\LaravelHarvestApi\Harvest\Invoices\InvoicesApi;
use Illuminate\Support\Facades\Facade;

class InvoicesFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return InvoicesApi::class;
    }
}
