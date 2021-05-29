<?php

namespace Actuallyconnor\LaravelHarvestApi;

use GuzzleHttp\Client;

class LaravelHarvestApi
{
    private $client;

    public function __construct()
    {
        $this->instantiateBaseClient();
    }

    private function instantiateBaseClient()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => config('harvest.base_uri')
        ]);
    }

    public function getBaseClient()
    {
        return $this->client;
    }
}
