<?php

namespace Actuallyconnor\LaravelHarvestApi;

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
            __DIR__.'/../config/harvest.php', 'harvest'
        );

        App::bind('Harvest', function () {
            return new LaravelHarvestApi();
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
