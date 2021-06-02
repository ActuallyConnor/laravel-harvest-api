<?php

namespace Actuallyconnor\LaravelHarvestApi;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\ClientsApi;
use Actuallyconnor\LaravelHarvestApi\Harvest\Invoices\InvoicesApi;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class LaravelHarvestApiServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/harvest.php',
            'harvest'
        );

        App::bind('Harvest', function () {
            return new LaravelHarvestApi();
        });
        App::bind('Clients', function () {
            return new ClientsApi();
        });
        App::bind('Invoices', function () {
            return new InvoicesApi();
        });
    }

    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/harvest.php' => config_path('harvest.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
