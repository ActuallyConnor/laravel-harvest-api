<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature\Clients;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Client;
use Tests\TestCase;

class ClientTest extends TestCase
{
    private $client;

    public function setUp(): void
    {
        parent::setUp();
        $data = (object) [
            'client' => 5735776,
            'name' => "123 Industries",
            'is_active' => true,
            'address' => "123 Main St.\r\nAnytown, LA 71223",
            'statement_key' => 1234567890987654321,
            'currency' => "EUR",
            'created_at' => "2017-06-26T21:02:12Z",
            'updated_at' => "2017-06-26T21:34:11Z",
        ];
        $this->client = new Client($data);
    }

    public function test_instance_of_client()
    {
        $this->assertInstanceOf(Client::class, $this->client);
    }

    public function test_get_id()
    {
        $this->assertEquals(5735776, $this->client->getId());
    }

    public function test_get_name()
    {
        $this->assertEquals("123 Industries", $this->client->getName());
    }

    public function test_get_is_active()
    {
        $this->assertEquals(true, $this->client->getIsActive());
    }

    public function test_get_address()
    {
        $this->assertEquals("123 Main St.\r\nAnytown, LA 71223", $this->client->getAddress());
    }

    public function test_get_statementKey()
    {
        $this->assertEquals(1234567890987654321, $this->client->getStatementKey());
    }

    public function test_get_currency()
    {
        $this->assertEquals("EUR", $this->client->getCurrency());
    }

    public function test_get_created_at()
    {
        $this->assertEquals("2017-06-26T21:02:12Z", $this->client->getCreatedAt());
    }

    public function test_get_updated_at()
    {
        $this->assertEquals("2017-06-26T21:34:11Z", $this->client->getUpdatedAt());
    }
}
