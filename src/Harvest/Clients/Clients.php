<?php


namespace Actuallyconnor\LaravelHarvestApi\Harvest\Clients;


use Actuallyconnor\LaravelHarvestApi\LaravelHarvestApiFacade;

class Clients
{
    private $id = 0;
    private $name = '';
    private $is_active = false;
    private $address = '';
    private $statement_key = '';
    private $currency = '';
    private $created_at = '';
    private $updated_at = '';

    private $uri = 'clients';

    private $client;

    public function __construct()
    {
        $this->client = LaravelHarvestApiFacade::getBaseClient();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getStatementKey()
    {
        return $this->statement_key;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param $is_active bool Pass true to only return active clients and false to return inactive clients.
     * @param $updated_since string Only return clients that have been updated since the given date and time.
     * @param $page int The page number to use in pagination. For instance, if you make a list request and receive 100 records, your subsequent call can include page=2 to retrieve the next page of the list. (Default: 1)
     * @param $per_page int The number of records to return per page. Can range between 1 and 100. (Default: 100)
     */
    public function listAllClients($is_active, $updated_since, $page = 1, $per_page = 100)
    {
        $response = $this->client->request('GET', $this->uri);
    }
}
