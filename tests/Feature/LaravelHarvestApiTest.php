<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature;

use Actuallyconnor\LaravelHarvestApi\LaravelHarvestApiFacade;
use Tests\TestCase;

class LaravelHarvestApiTest extends TestCase
{
    public function testGetBaseClient()
    {
        $client = LaravelHarvestApiFacade::getBaseClient();

        $this->assertIsObject($client);
    }
}
