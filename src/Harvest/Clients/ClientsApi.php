<?php


namespace Actuallyconnor\LaravelHarvestApi\Harvest\Clients;

use Actuallyconnor\LaravelHarvestApi\LaravelHarvestApiFacade;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class Clients
 * https://help.getharvest.com/api-v2/clients-api/clients/clients/
 *
 * @package Actuallyconnor\LaravelHarvestApi\Harvest\Clients
 */
class ClientsApi
{
    private $uri = 'clients';

    private GuzzleClient $client;

    public function __construct()
    {
        $this->client = LaravelHarvestApiFacade::getBaseClient();
    }

    /**
     * @param $is_active bool Pass true to only return active clients and false to return inactive clients.
     * @param $updated_since string Only return clients that have been updated since the given date and time.
     * @param $page int The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @param $per_page int The number of records to return per page. Can range between 1 and 100. (Default: 100)
     *
     * @return mixed
     * @throws GuzzleException
     */
    public function listAllClients($is_active = true, $updated_since = 'today', $page = 1, $per_page = 100)
    {
        $response = $this->client->get($this->uri, [
            'is_active' => $is_active,
            'updated_since' => date('Y-m-d\TH:i:s\Z', strtotime($updated_since)), // 2017-06-26T21:01:52Z
            'page' => $page,
            'per_page' => $per_page,
        ]);

        $data = json_decode($response->getBody());

        $clients = [];

        foreach ($data->clients as $client) {
            $clients[] = new Client($client->id, $client->name, $client->is_active, $client->address, $client->statement_key, $client->currency, $client->created_at, $client->updated_at);
        }

        return $clients;
    }
}
