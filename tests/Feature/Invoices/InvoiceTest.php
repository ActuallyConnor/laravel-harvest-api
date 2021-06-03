<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature\Invoices;

use Actuallyconnor\LaravelHarvestApi\Harvest\Invoices\Invoice;
use Tests\TestCase;

class InvoiceTest extends TestCase
{

    private Invoice $invoice;

    public function setUp(): void
    {
        parent::setUp();

        $response = $this->get('/harvest/invoices/123');
        $invoice     = json_decode($response->getContent());

        $this->invoice = new Invoice($invoice);
    }

    public function test_invoice_instance()
    {
        $this->assertInstanceOf(Invoice::class, $this->invoice);
    }
}
