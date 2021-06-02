<?php

use Actuallyconnor\LaravelHarvestApi\Http\Controllers\MockHarvestClientsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('harvest/clients', function (Request $request) {
    return (new MockHarvestClientsController())->getClients($request);
});

Route::get('harvest/clients/{client_id}', function (Request $request, $client_id) {
    return (new MockHarvestClientsController())->getClient($client_id);
});

Route::post('harvest/clients', function (Request $request) {
    return (new MockHarvestClientsController())->postClient($request);
});

Route::patch('harvest/clients/{client_id}', function (Request $request, $client_id) {
    return (new MockHarvestClientsController())->updateClient($request, $client_id);
});

Route::delete('harvest/clients/{client_id}', function ($client_id) {
    return (new MockHarvestClientsController())->deleteClient($client_id);
});
