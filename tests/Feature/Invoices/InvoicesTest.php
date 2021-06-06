<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature\Invoices;

use Actuallyconnor\LaravelHarvestApi\Harvest\Invoices\Invoice;
use Actuallyconnor\LaravelHarvestApi\Harvest\Invoices\Invoices;
use Tests\TestCase;

class InvoicesTest extends TestCase
{
    private Invoices $invoices;
    private $data;

    public function setUp(): void
    {
        parent::setUp();
        $response = $this->get('/harvest/invoices', []);
        $this->data = json_decode($response->getContent());

        $this->invoices = new Invoices($this->data);
    }

    public function test_get_invoices()
    {
        $this->assertIsArray($this->invoices->getInvoices());
        $this->assertInstanceOf(Invoice::class, $this->invoices->getInvoices()[0]);
    }

    public function test_get_per_page()
    {
        $this->assertEquals($this->data->per_page, $this->invoices->getPerPage());
    }

    public function test_get_total_pages()
    {
        $this->assertEquals($this->data->total_pages, $this->invoices->getTotalPages());
    }

    public function test_get_total_entries()
    {
        $this->assertEquals($this->data->total_entries, $this->invoices->getTotalEntries());
    }

    public function test_next_page()
    {
        $this->assertEquals($this->data->next_page, $this->invoices->getNextPage());
    }

    public function test_get_previous_page()
    {
        $this->assertEquals($this->data->previous_page, $this->invoices->getPreviousPage());
    }

    public function test_get_page()
    {
        $this->assertEquals($this->data->page, $this->invoices->getPage());
    }

    public function test_get_links()
    {
        $this->assertEquals($this->data->links, $this->invoices->getLinks());
    }
}
