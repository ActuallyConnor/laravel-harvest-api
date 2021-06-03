<?php


namespace Actuallyconnor\LaravelHarvestApi\Harvest\Clients;

class Clients
{
    private array $clients = [];

    private int $per_page;
    private int $total_pages;
    private int $total_entries;
    private $next_page;
    private $previous_page;
    private int $page;
    private object $links;

    /**
     * Clients constructor.
     *
     * @param object $data
     */
    public function __construct($data)
    {
        foreach ($data->clients as $client) {
            $this->clients[] = new Client($client);
        }

        $this->per_page = $data->per_page;
        $this->total_pages = $data->total_pages;
        $this->total_entries = $data->total_entries;
        $this->next_page = $data->next_page;
        $this->previous_page = $data->previous_page;
        $this->page = $data->page;
        $this->links = $data->links;
    }

    /**
     * @return array
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * @return int
     */
    public function getPerPage()
    {
        return $this->per_page;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->total_pages;
    }

    /**
     * @return int
     */
    public function getTotalEntries()
    {
        return $this->total_entries;
    }

    /**
     * @return mixed
     */
    public function getNextPage()
    {
        return $this->next_page;
    }

    /**
     * @return mixed
     */
    public function getPreviousPage()
    {
        return $this->previous_page;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return object
     */
    public function getLinks()
    {
        return $this->links;
    }
}
