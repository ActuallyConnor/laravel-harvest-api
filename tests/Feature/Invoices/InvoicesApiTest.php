<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature\Invoices;

use Actuallyconnor\LaravelHarvestApi\Harvest\Invoices\Invoices;
use Actuallyconnor\LaravelHarvestApi\Harvest\Invoices\InvoicesApi;
use Actuallyconnor\LaravelHarvestApi\Http\Controllers\MockHarvestInvoicesController;
use Tests\TestCase;

class InvoicesApiTest extends TestCase
{
    private $invoicesApi;
    private $harvestMock;

    public function setUp(): void
    {
        parent::setUp();
        $this->invoicesApi = new InvoicesApi();
        $this->harvestMock = new MockHarvestInvoicesController();
    }

    public function test_instance_of()
    {
        $this->assertInstanceOf(InvoicesApi::class, $this->invoicesApi);
    }

    public function test_get_invoices()
    {
        $invoices = $this->invoicesApi->listAllInvoices(
            123,
            123,
            date('Y-m-d'),
            date('Y-m-d'),
            date('Y-m-d'),
            'draft',
            1,
            100
        );
        $this->assertInstanceOf(Invoices::class, $invoices);

        $invoice = $invoices->getInvoices()[ 0 ];

        $response = $this->get('/harvest/invoices', []);
        $data = json_decode($response->getContent());

        $mockInvoices = $data->invoices;
        $mockInvoice = $mockInvoices[ 0 ];

        $this->test_mock_invoice_against_real($mockInvoice, $invoice);
    }

    private function test_mock_invoice_against_real($mockInvoice, $invoice)
    {
        $this->assertEquals($mockInvoice->id, $invoice->getId());
        // TODO: fill out all assertions here
    }
}
