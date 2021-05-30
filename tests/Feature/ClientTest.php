<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Client;
use Tests\TestCase;

class ClientTest extends TestCase
{

    private $client;

    public function setUp(): void
    {
        parent::setUp();
        $this->client = new Client(5735776, "123 Industries", true, "123 Main St.\r\nAnytown, LA 71223", 1234567890987654321, "EUR", "2017-06-26T21:02:12Z", "2017-06-26T21:34:11Z");
    }

    public function testGetId()
    {
        $this->assertEquals(5735776, $this->client->getId());
    }

    public function testGetName()
    {
        $this->assertEquals("123 Industries", $this->client->getName());
    }

    public function testGetIsActive()
    {
        $this->assertEquals(true, $this->client->getIsActive());
    }

    public function testGetAddress()
    {
        $this->assertEquals("123 Main St.\r\nAnytown, LA 71223", $this->client->getAddress());
    }

    public function testGetStatementKey()
    {
        $this->assertEquals(1234567890987654321, $this->client->getStatementKey());
    }

    public function testGetCurrency()
    {
        $this->assertEquals("EUR", $this->client->getCurrency());
    }

    public function testGetCreatedAt()
    {
        $this->assertEquals("2017-06-26T21:02:12Z", $this->client->getCreatedAt());
    }

    public function testGetUpdatedAt()
    {
        $this->assertEquals("2017-06-26T21:34:11Z", $this->client->getUpdatedAt());
    }
}
