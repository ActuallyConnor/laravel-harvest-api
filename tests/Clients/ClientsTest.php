<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Clients;

class ClientsTest extends TestCase
{
    private $clients;

    public function setUp(): void
    {
        parent::setUp();
        $this->clients = new Clients();
    }

    public function testCreateClientsObject()
    {
        $this->assertInstanceOf(Clients::class, $this->clients);
    }

    public function testGetId()
    {
        $this->assertEquals(0, $this->clients->getId());
    }

    public function testGetName()
    {
        $this->assertEquals('', $this->clients->getName());
    }

    public function testGetIsActive()
    {
        $this->assertEquals(false, $this->clients->getIsActive());
    }

    public function testGetAddress()
    {
        $this->assertEquals('', $this->clients->getAddress());
    }

    public function testGetStatementKey()
    {
        $this->assertEquals('', $this->clients->getStatementKey());
    }

    public function testGetCurrency()
    {
        $this->assertEquals('', $this->clients->getStatementKey());
    }

    public function testGetCreatedAt()
    {
        $this->assertEquals('', $this->clients->getCreatedAt());
    }

    public function testGetUpdatedAt()
    {
        $this->assertEquals('', $this->clients->getUpdatedAt());
    }
}
