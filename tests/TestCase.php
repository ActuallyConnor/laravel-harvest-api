<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests;

use Actuallyconnor\LaravelHarvestApi\LaravelHarvestApiFacade;
use Actuallyconnor\LaravelHarvestApi\LaravelHarvestApiServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected $loadEnvironmentVariables = true;

    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelHarvestApiServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Harvest' => LaravelHarvestApiFacade::class,
        ];
    }
}
