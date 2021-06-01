<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature\Clients;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Client;
use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Clients;
use Tests\TestCase;

class ClientsTest extends TestCase
{
    private Clients $clients;
    private $data;

    public function setUp(): void
    {
        parent::setUp();
        $response = $this->get('/harvest/clients', []);
        $this->data = json_decode($response->getContent());

        $this->clients = new Clients($this->data);
    }

    public function test_get_clients()
    {
        $this->assertIsArray($this->clients->getClients());
        $this->assertInstanceOf(Client::class, $this->clients->getClients()[0]);
    }

    public function test_get_per_page()
    {
        $this->assertEquals($this->data->per_page, $this->clients->getPerPage());
    }

    public function test_get_total_pages()
    {
        $this->assertEquals($this->data->total_pages, $this->clients->getTotalPages());
    }

    public function test_get_total_entries()
    {
        $this->assertEquals($this->data->total_entries, $this->clients->getTotalEntries());
    }

    public function test_next_page()
    {
        $this->assertEquals($this->data->next_page, $this->clients->getNextPage());
    }

    public function test_get_previous_page()
    {
        $this->assertEquals($this->data->previous_page, $this->clients->getPreviousPage());
    }

    public function test_get_page()
    {
        $this->assertEquals($this->data->page, $this->clients->getPage());
    }

    public function test_get_links()
    {
        $this->assertEquals($this->data->links, $this->clients->getLinks());
    }
}
