<?php


namespace Actuallyconnor\LaravelHarvestApi\Harvest\Clients;

class Client
{
    private int $id;
    private string $name;
    private bool $is_active;
    private string $address;
    private int $statement_key;
    private string $currency;
    private string $created_at;
    private string $updated_at;

    /**
     * Client constructor.
     *
     * @param $id
     * @param $name
     * @param $is_active
     * @param $address
     * @param $statement_key
     * @param $currency
     * @param $created_at
     * @param $updated_at
     */
    public function __construct($id, $name, $is_active, $address, $statement_key, $currency, $created_at, $updated_at)
    {
        $this->id = $id;
        $this->name = $name;
        $this->is_active = $is_active;
        $this->address = $address;
        $this->statement_key = $statement_key;
        $this->currency = $currency;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
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
