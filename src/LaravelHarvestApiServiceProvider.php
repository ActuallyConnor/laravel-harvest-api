<?php

namespace Actuallyconnor\LaravelHarvestApi;

use Actuallyconnor\LaravelHarvestApi\Commands\LaravelHarvestApiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelHarvestApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-harvest-api')
            ->hasConfigFile()
            ->hasViews() // TODO: routes not showing up in php artisan route:list
            ->hasRoutes('mock.php')
//            ->hasMigration('create_laravel-harvest-api_table')
            ->hasCommand(LaravelHarvestApiCommand::class);
    }
}
