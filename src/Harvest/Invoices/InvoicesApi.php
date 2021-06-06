<?php


namespace Actuallyconnor\LaravelHarvestApi\Harvest\Invoices;

use Actuallyconnor\LaravelHarvestApi\LaravelHarvestApiFacade;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Class InvoicesApi
 * https://help.getharvest.com/api-v2/invoices-api/invoices/invoices/
 *
 * @package Actuallyconnor\LaravelHarvestApi\Harvest\Invoices
 */
class InvoicesApi
{
    private $uri = 'invoices';

    private GuzzleClient $client;

    public function __construct()
    {
        $this->client = LaravelHarvestApiFacade::getBaseClient();
    }

    /**
     * Returns a list of your invoices. The invoices are returned sorted by issue date, with the most recently issued
     * invoices appearing first.
     *
     * @param $client_id int Only return invoices belonging to the client with the given ID.
     * @param $project_id int Only return invoices associated with the project with the given ID.
     * @param $updated_since string Only return invoices that have been updated since the given date and time. Y-m-d
     * @param $from string Only return invoices with an issue_date on or after the given date. Y-m-d
     * @param $to string Only return invoices with an issue_date on or before the given date. Y-m-d
     * @param $state string Only return invoices with a state matching the value provided. Options: draft, open, paid, or closed.
     * @param $page int The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @param $per_page int The number of records to return per page. Can range between 1 and 100. (Default: 100)
     *
     * @return mixed
     * @throws GuzzleException
     */
    public function listAllInvoices($client_id, $project_id, $updated_since, $from, $to, $state, $page, $per_page)
    {
        $response = $this->client->get($this->uri, [
            'client_id' => $client_id,
            'project_id' => $project_id,
            'updated_since' => $updated_since,
            'from' => $from,
            'to' => $to,
            'state' => $state,
            'page' => $page,
            'per_page' => $per_page,
        ]);

        $data = json_decode($response->getBody());

        return new Invoices($data);
    }
}
