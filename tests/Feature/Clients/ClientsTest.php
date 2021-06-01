<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature\Clients;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Clients;
use Tests\TestCase;

class ClientsTest extends TestCase
{
    private Clients $clients;
    private $data;

    public function setUp(): void
    {
        parent::setUp();
        $response = $this->get('/harvest/clients');
        $this->data = json_decode($response->getContent());

        $this->clients = new Clients($this->data);
    }

    public function test_get_clients()
    {
        $client = $this->clients->getClients()[0];

        $mockClients = $this->data->clients;
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
