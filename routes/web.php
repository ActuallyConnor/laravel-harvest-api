<?php

use Actuallyconnor\LaravelHarvestApi\Http\Controllers\HarvestController;
use Illuminate\Support\Facades\Route;

Route::get('harvest/clients', function () {
    return (new HarvestController())->getClients();
});
