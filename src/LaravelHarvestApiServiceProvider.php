<?php

namespace Actuallyconnor\LaravelHarvestApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Actuallyconnor\LaravelHarvestApi\Commands\LaravelHarvestApiCommand;

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
            ->hasViews()
            ->hasMigration('create_laravel-harvest-api_table')
            ->hasCommand(LaravelHarvestApiCommand::class);
    }
}
