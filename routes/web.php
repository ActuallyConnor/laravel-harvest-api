<?php

use Actuallyconnor\LaravelHarvestApi\Http\Controllers\HarvestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('harvest/clients', function (Request $request) {
    return (new HarvestController())->getClients($request);
});

Route::get('harvest/clients/{client_id}', function (Request $request, $client_id) {
    return (new HarvestController())->getClient($client_id);
});

Route::post('harvest/clients', function (Request $request) {
    return (new HarvestController())->postClient($request);
});

Route::patch('harvest/clients/{client_id}', function (Request $request, $client_id) {
    return (new HarvestController())->updateClient($request, $client_id);
});

Route::delete('harvest/clients/{client_id}', function ($client_id) {
    return (new HarvestController())->deleteClient($client_id);
});
