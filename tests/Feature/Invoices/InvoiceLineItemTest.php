<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature\Invoices;

use Actuallyconnor\LaravelHarvestApi\Harvest\Invoices\InvoiceLineItem;
use Tests\TestCase;

class InvoiceLineItemTest extends TestCase
{

    private InvoiceLineItem $invoiceLineItem;
    private object $lineItem;

    public function setUp(): void
    {
        parent::setUp();

        $response       = $this->get('/harvest/invoices/123');
        $data           = json_decode($response->getContent());
        $this->lineItem = $data->line_items[ 0 ];

        $this->invoiceLineItem = new InvoiceLineItem($this->lineItem);
    }

    public function test_instance_of()
    {
        $this->assertInstanceOf(InvoiceLineItem::class, $this->invoiceLineItem);
    }

    public function test_get_id()
    {
        $this->assertEquals($this->lineItem->id, $this->invoiceLineItem->getId());
    }

    public function test_get_project()
    {
        $this->assertEquals($this->lineItem->project, $this->invoiceLineItem->getProject());
    }

    public function test_get_kind()
    {
        $this->assertEquals($this->lineItem->kind, $this->invoiceLineItem->getKind());
    }

    public function test_get_description()
    {
        $this->assertEquals($this->lineItem->description, $this->invoiceLineItem->getDescription());
    }

    public function test_get_quantity()
    {
        $this->assertEquals($this->lineItem->quantity, $this->invoiceLineItem->getQuantity());
    }

    public function test_get_unit_price()
    {
        $this->assertEquals($this->lineItem->unit_price, $this->invoiceLineItem->getUnitPrice());
    }

    public function test_get_amount()
    {
        $this->assertEquals($this->lineItem->amount, $this->invoiceLineItem->getAmount());
    }

    public function test_get_taxed()
    {
        $this->assertEquals($this->lineItem->taxed, $this->invoiceLineItem->getTaxed());
    }

    public function test_get_taxed2()
    {
        $this->assertEquals($this->lineItem->taxed2, $this->invoiceLineItem->getTaxed2());
    }
}
