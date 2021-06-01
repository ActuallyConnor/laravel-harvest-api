<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature\Clients;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Client;
use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Clients;
use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\ClientsApi;
use Actuallyconnor\LaravelHarvestApi\Http\Controllers\HarvestController;
use Tests\TestCase;

class ClientsApiTest extends TestCase
{
    private $clientsApi;
    private $harvestMock;

    public function setUp(): void
    {
        parent::setUp();
        $this->clientsApi = new ClientsApi();
        $this->harvestMock = new HarvestController();
    }

    public function test_create_clients_object()
    {
        $this->assertInstanceOf(ClientsApi::class, $this->clientsApi);
    }

    public function test_get_clients()
    {
        $response = $this->get('/harvest/clients', []);
        $data = json_decode($response->getContent());

        $clients = $this->clientsApi->listAllClients(true, date('Y-m-d'));
        $this->assertInstanceOf(Clients::class, $clients);

        $client = $clients->getClients()[0];

        $mockClients = $data->clients;
        $mockClient = $mockClients[0];

        $this->assertEquals($mockClient->id, $client->getId());
        $this->assertEquals($mockClient->name, $client->getName());
        $this->assertEquals($mockClient->is_active, $client->getIsActive());
        $this->assertEquals($mockClient->statement_key, $client->getStatementKey());
        $this->assertEquals($mockClient->currency, $client->getCurrency());
        $this->assertEquals($mockClient->created_at, $client->getCreatedAt());
        $this->assertEquals($mockClient->updated_at, $client->getUpdatedAt());
    }

    public function test_get_client()
    {
        $client = $this->clientsApi->retrieveClient(123);
        $this->assertInstanceOf(Client::class, $client);
    }
}
