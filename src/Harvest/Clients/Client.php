<?php


namespace Actuallyconnor\LaravelHarvestApi\Harvest\Clients;

class Client
{
    private int $id;
    private string $name;
    private $is_active;
    private $address;
    private $statement_key;
    private $currency;
    private $created_at;
    private $updated_at;

    /**
     * Client constructor.
     *
     * @param $client
     */
    public function __construct($client)
    {
        $this->id = isset($client->id) ? $client->id : $client->client;
        $this->name = $client->name;
        $this->is_active = isset($client->is_active) ? $client->is_active : null;
        $this->address = isset($client->address) ? $client->address : null;
        $this->statement_key = isset($client->statement_key) ? $client->statement_key : null;
        $this->currency = isset($client->currency) ? $client->currency : null;
        $this->created_at = isset($client->created_at) ? $client->created_at : null;
        $this->updated_at = isset($client->updated_at) ? $client->updated_at : null;
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
}
