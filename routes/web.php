<?php

use Actuallyconnor\LaravelHarvestApi\Http\Controllers\HarvestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('harvest/clients', function (Request $request) {
    return (new HarvestController())->getClients($request);
});

Route::get('harvest/clients/{client_id}', function(Request $request, $client_id) {
    return (new HarvestController())->getClient($client_id);
});
