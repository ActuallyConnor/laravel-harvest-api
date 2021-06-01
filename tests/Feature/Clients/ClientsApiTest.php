<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature\Clients;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Clients;
use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\ClientsApi;
use Actuallyconnor\LaravelHarvestApi\Http\Controllers\HarvestController;
use Tests\TestCase;

class ClientsApiTest extends TestCase
{
    private $clients;
    private $harvestMock;

    public function setUp(): void
    {
        parent::setUp();
        $this->clients = new ClientsApi();
        $this->harvestMock = new HarvestController();
    }

    public function test_create_clients_object()
    {
        $this->assertInstanceOf(ClientsApi::class, $this->clients);
    }

    public function test_get_clients()
    {
        $clients = $this->clients->listAllClients(true, date('Y-m-d'));
        $this->assertInstanceOf(Clients::class, $clients);
    }
}
