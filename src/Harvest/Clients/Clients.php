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
     * @param object $clients
     */
    public function __construct($clients)
    {
        foreach ($clients->clients as $client) {
            $this->clients[] = new Client($client);
        }

        $this->per_page = $clients->per_page;
        $this->total_pages = $clients->total_pages;
        $this->total_entries = $clients->total_entries;
        $this->next_page = $clients->next_page;
        $this->previous_page = $clients->previous_page;
        $this->page = $clients->page;
        $this->links = $clients->links;
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
