<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature\Clients;

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

    public function testGetClients()
    {
        $clients = $this->clients->listAllClients(true, date('Y-m-d'));
        $client = $clients[0];

        $response = $this->get('/harvest/clients');
        $mockClients = json_decode($response->getContent())->clients;
        $mockClient = $mockClients[0];

        $this->assertEquals($mockClient->id, $client->getId());
        $this->assertEquals($mockClient->name, $client->getName());
        $this->assertEquals($mockClient->is_active, $client->getIsActive());
        $this->assertEquals($mockClient->statement_key, $client->getStatementKey());
        $this->assertEquals($mockClient->currency, $client->getCurrency());
        $this->assertEquals($mockClient->created_at, $client->getCreatedAt());
        $this->assertEquals($mockClient->updated_at, $client->getUpdatedAt());
    }
}
