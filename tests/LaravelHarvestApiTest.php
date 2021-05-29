<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests;

use Actuallyconnor\LaravelHarvestApi\LaravelHarvestApiFacade;

class LaravelHarvestApiTest extends TestCase
{
    public function testGetBaseClient()
    {
        $client = LaravelHarvestApiFacade::getBaseClient();

        $this->assertIsObject($client);
    }
}
