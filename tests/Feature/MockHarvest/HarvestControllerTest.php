<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature\MockHarvest;

use Tests\TestCase;

class HarvestControllerTest extends TestCase
{
    public function test_get_clients()
    {
        $response = $this->get('/harvest/clients', [
            'is_active' => true,
            'updated_since' => date('Y-m-d\TH:i:s\Z', strtotime('today')), // 2017-06-26T21:01:52Z
            'page' => 1,
            'per_page' => 100,
        ]);
        $response->assertStatus(200);
    }

    public function test_get_clients_no_params()
    {
        $response = $this->get('/harvest/clients', []);
        $response->assertStatus(200);
    }

    public function test_get_client()
    {
        $response = $this->get('/harvest/clients/123');
        $response->assertStatus(200);
    }

    public function test_post_client()
    {
        $name = 'Test Client Name';

        $response = $this->post('/harvest/clients', [
            'name' => $name,
            'is_active' => true,
            'address' => '123 Home St',
            'currency' => 'USD',
        ]);

        $response->assertStatus(200);
    }

    public function test_post_client_required_only()
    {
        $name = 'Test Client Name';

        $response = $this->post('/harvest/clients', [
            'name' => $name
        ]);

        $response->assertStatus(200);
    }

    public function test_post_client_missing_name()
    {
        $response = $this->post('/harvest/clients', []);

        $response->assertStatus(400);
    }
}
