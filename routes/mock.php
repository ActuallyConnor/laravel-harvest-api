<?php


use Actuallyconnor\LaravelHarvestApi\Controllers\Mock\HarvestController;
use Illuminate\Support\Facades\Route;

Route::get('clients', [HarvestController::class, 'getClients']);
