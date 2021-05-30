<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Clients;
use Actuallyconnor\LaravelHarvestApi\Http\Controllers\HarvestController;
use Tests\TestCase;

class ClientsTest extends TestCase
{
    private $clients;
    private $harvestMock;

    public function setUp(): void
    {
        parent::setUp();
        $this->clients = new Clients();
        $this->harvestMock = new HarvestController();
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

    public function testGetClients()
    {
        $clients = $this->clients->listAllClients(true, date('Y-m-d'));
        $mockClients = $this->harvestMock->getClients();
        $this->assertEquals($mockClients, $clients);
    }
}
