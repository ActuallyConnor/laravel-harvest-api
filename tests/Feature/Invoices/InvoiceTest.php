<?php

namespace Actuallyconnor\LaravelHarvestApi\Tests\Feature\Invoices;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Client;
use Actuallyconnor\LaravelHarvestApi\Harvest\Invoices\Invoice;
use Actuallyconnor\LaravelHarvestApi\Harvest\Invoices\InvoiceLineItem;
use Tests\TestCase;

class InvoiceTest extends TestCase
{
    private Invoice $invoice;
    private $data;

    public function setUp(): void
    {
        parent::setUp();

        $response = $this->get('/harvest/invoices/123');
        $this->data = json_decode($response->getContent());

        $this->invoice = new Invoice($this->data);
    }

    public function test_invoice_instance()
    {
        $this->assertInstanceOf(Invoice::class, $this->invoice);
    }

    public function test_get_id()
    {
        $this->assertEquals($this->data->id, $this->invoice->getId());
    }

    public function test_get_client()
    {
        $this->assertInstanceOf(Client::class, $this->invoice->getClient());
    }

    public function test_get_line_items()
    {
        $this->assertInstanceOf(InvoiceLineItem::class, $this->invoice->getLineItems()[ 0 ]);
    }

    public function test_get_estimate()
    {
        $this->assertEquals($this->data->estimate, $this->invoice->getEstimate());
    }

    public function test_get_retainer()
    {
        $this->assertEquals($this->data->retainer, $this->invoice->getRetainer());
    }

    public function test_get_creator()
    {
        $this->assertEquals($this->data->creator, $this->invoice->getCreator());
    }

    public function test_get_client_key()
    {
        $this->assertEquals($this->data->client_key, $this->invoice->getClientKey());
    }

    public function test_get_number()
    {
        $this->assertEquals($this->data->number, $this->invoice->getNumber());
    }

    public function test_get_purchase_order()
    {
        $this->assertEquals($this->data->purchase_order, $this->invoice->getPurchaseOrder());
    }

    public function test_get_amount()
    {
        $this->assertEquals($this->data->amount, $this->invoice->getAmount());
    }

    public function test_get_due_amount()
    {
        $this->assertEquals($this->data->due_amount, $this->invoice->getDueAmount());
    }

    public function test_get_tax()
    {
        $this->assertEquals($this->data->tax, $this->invoice->getTax());
    }

    public function test_get_tax_amount()
    {
        $this->assertEquals($this->data->tax_amount, $this->invoice->getTaxAmount());
    }

    public function test_get_tax2()
    {
        $this->assertEquals($this->data->tax2, $this->invoice->getTax2());
    }

    public function test_get_tax2_amount()
    {
        $this->assertEquals($this->data->tax2_amount, $this->invoice->getTax2Amount());
    }

    public function test_get_discount()
    {
        $this->assertEquals($this->data->discount, $this->invoice->getDiscount());
    }

    public function test_get_discount_amount()
    {
        $this->assertEquals($this->data->discount_amount, $this->invoice->getDiscountAmount());
    }

    public function test_get_subject()
    {
        $this->assertEquals($this->data->subject, $this->invoice->getSubject());
    }

    public function test_get_notes()
    {
        $this->assertEquals($this->data->notes, $this->invoice->getNotes());
    }

    public function test_get_currency()
    {
        $this->assertEquals($this->data->currency, $this->invoice->getCurrency());
    }

    public function test_get_state()
    {
        $this->assertEquals($this->data->state, $this->invoice->getState());
    }

    public function test_get_period_start()
    {
        $this->assertEquals($this->data->period_start, $this->invoice->getPeriodStart());
    }

    public function test_get_period_end()
    {
        $this->assertEquals($this->data->period_end, $this->invoice->getPeriodEnd());
    }

    public function test_get_issue_date()
    {
        $this->assertEquals($this->data->issue_date, $this->invoice->getIssueDate());
    }

    public function test_get_due_date()
    {
        $this->assertEquals($this->data->due_date, $this->invoice->getDueDate());
    }

    public function test_get_payment_term()
    {
        $this->assertEquals($this->data->payment_term, $this->invoice->getPaymentTerm());
    }

    public function test_get_sent_at()
    {
        $this->assertEquals($this->data->sent_at, $this->invoice->getSentAt());
    }

    public function test_get_paid_at()
    {
        $this->assertEquals($this->data->paid_at, $this->invoice->getPaidAt());
    }

    public function test_get_paid_date()
    {
        $this->assertEquals($this->data->paid_date, $this->invoice->getPaidDate());
    }

    public function test_get_closed_at()
    {
        $this->assertEquals($this->data->closed_at, $this->invoice->getClosedAt());
    }

    public function test_get_recurring_invoice_id()
    {
        $this->assertEquals($this->data->recurring_invoice_id, $this->invoice->getRecurringInvoiceId());
    }

    public function test_get_created_at()
    {
        $this->assertEquals($this->data->created_at, $this->invoice->getCreatedAt());
    }

    public function test_get_updated_at()
    {
        $this->assertEquals($this->data->updated_at, $this->invoice->getUpdatedAt());
    }
}
