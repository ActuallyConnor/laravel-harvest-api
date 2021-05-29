<?php

namespace Actuallyconnor\LaravelHarvestApi;

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
            ->hasRoutes('web'); // TODO: routes not showing up in php artisan route:list
    }
}
