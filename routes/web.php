<?php

use Actuallyconnor\LaravelHarvestApi\Http\Controllers\HarvestClientsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('harvest/clients', function (Request $request) {
    return (new HarvestClientsController())->getClients($request);
});

Route::get('harvest/clients/{client_id}', function (Request $request, $client_id) {
    return (new HarvestClientsController())->getClient($client_id);
});

Route::post('harvest/clients', function (Request $request) {
    return (new HarvestClientsController())->postClient($request);
});

Route::patch('harvest/clients/{client_id}', function (Request $request, $client_id) {
    return (new HarvestClientsController())->updateClient($request, $client_id);
});

Route::delete('harvest/clients/{client_id}', function ($client_id) {
    return (new HarvestClientsController())->deleteClient($client_id);
});
