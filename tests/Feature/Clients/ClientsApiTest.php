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
        $clients = $this->clientsApi->listAllClients(true, date('Y-m-d'));
        $this->assertInstanceOf(Clients::class, $clients);

        $client = $clients->getClients()[0];

        $response = $this->get('/harvest/clients', []);
        $data = json_decode($response->getContent());

        $mockClients = $data->clients;
        $mockClient = $mockClients[0];

        $this->test_mock_client_aginst_real($mockClient, $client);
    }

    public function test_get_client()
    {
        $client = $this->clientsApi->retrieveClient(123);
        $this->assertInstanceOf(Client::class, $client);

        $response = $this->get('/harvest/clients/123');
        $mockClient = json_decode($response->getContent());

        $this->test_mock_client_aginst_real($mockClient, $client);
    }

    public function test_post_client()
    {
        $name = 'Test Client Name';

        $client = $this->clientsApi->createClient($name);

        $this->assertInstanceOf(Client::class, $client);

        $response = $this->post('/harvest/clients', [
            'name' => $name
        ]);
        $mockClient = json_decode($response->getContent());

        $this->test_mock_client_aginst_real($mockClient, $client); // TODO: ErrorException : Trying to get property 'id' of non-object
    }

    private function test_mock_client_aginst_real($mockClient, $client)
    {
        $this->assertEquals($mockClient->id, $client->getId());
        $this->assertEquals($mockClient->name, $client->getName());
        $this->assertEquals($mockClient->is_active, $client->getIsActive());
        $this->assertEquals($mockClient->statement_key, $client->getStatementKey());
        $this->assertEquals($mockClient->currency, $client->getCurrency());
        $this->assertEquals($mockClient->created_at, $client->getCreatedAt());
        $this->assertEquals($mockClient->updated_at, $client->getUpdatedAt());
    }
}
