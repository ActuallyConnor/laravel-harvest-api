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
    public function listAllClients($is_active, $updated_since, $page, $per_page)
    {
        $response = $this->client->get($this->uri, [
            'is_active' => $is_active,
            'updated_since' => date('Y-m-d\TH:i:s\Z', strtotime($updated_since)), // 2017-06-26T21:01:52Z
            'page' => $page,
            'per_page' => $per_page,
        ]);

        $data = json_decode($response->getBody());

        return new Clients($data);
    }

    /**
     * @param $clientId
     *
     * @return Client
     * @throws GuzzleException
     */
    public function retrieveClient($clientId)
    {
        $response = $this->client->get(sprintf("%s/%s", $this->uri, $clientId));

        $data = json_decode($response->getBody());

        return new Client(
            $data->id,
            $data->name,
            $data->is_active,
            $data->address,
            $data->statement_key,
            $data->currency,
            $data->created_at,
            $data->updated_at
        );
    }

    /**
     * See a list of supported currencies
     * https://help.getharvest.com/api-v2/introduction/overview/supported-currencies/
     *
     * @param  string  $name  A textual description of the client.
     * @param  mixed  $is_active  Whether the client is active, or archived. Defaults to true.
     * @param  mixed  $address  A textual representation of the client’s physical address. May include new line characters.
     * @param  mixed  $currency  The currency used by the client. If not provided, the company’s currency will be used.
     *
     * @return Client
     * @throws GuzzleException
     */
    public function createClient(string $name, $is_active, $address, $currency)
    {
        $response = $this->client->post($this->uri, [
            'body' => json_encode([
                'name' => $name,
                'is_active' => $is_active,
                'address' => $address,
                'currency' => $currency,
            ]),
        ]);

        $data = json_decode($response->getBody());

        return new Client(
            $data->id,
            $data->name,
            $data->is_active,
            $data->address,
            $data->statement_key,
            $data->currency,
            $data->created_at,
            $data->updated_at
        );
    }

    // TODO: add tests for this, HarvestController
    public function updateClient($clientId, $name, $is_active, $address, $currency)
    {
        $response = $this->client->patch(sprintf("%s/%s", $this->uri, $clientId), [
            'body' => json_encode([
                'name' => $name,
                'is_active' => $is_active,
                'address' => $address,
                'currency' => $currency,
            ]),
        ]);

        $data = json_decode($response->getBody());

        return new Client(
            $data->id,
            $data->name,
            $data->is_active,
            $data->address,
            $data->statement_key,
            $data->currency,
            $data->created_at,
            $data->updated_at
        );
    }
}
