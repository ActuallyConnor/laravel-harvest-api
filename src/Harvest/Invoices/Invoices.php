<?php


namespace Actuallyconnor\LaravelHarvestApi\Harvest\Invoices;

class Invoices
{
    private array $invoices = [];

    private int $per_page;
    private int $total_pages;
    private int $total_entries;
    private $next_page;
    private $previous_page;
    private int $page;
    private object $links;

    public function __construct($invoices)
    {
        foreach ($invoices->invoices as $invoice) {
            $this->invoices[] = new Invoice($invoice);
        }

        $this->per_page = $invoices->per_page;
        $this->total_pages = $invoices->total_pages;
        $this->total_entries = $invoices->total_entries;
        $this->next_page = $invoices->next_page;
        $this->previous_page = $invoices->previous_page;
        $this->page = $invoices->page;
        $this->links = $invoices->links;
    }

    /**
     * @return array
     */
    public function getInvoices()
    {
        return $this->invoices;
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
