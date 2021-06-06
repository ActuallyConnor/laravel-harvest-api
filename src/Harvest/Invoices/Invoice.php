<?php

namespace Actuallyconnor\LaravelHarvestApi\Harvest\Invoices;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Client;

/**
 * Class Invoice
 * @package Actuallyconnor\LaravelHarvestApi\Harvest\Invoices
 */
class Invoice
{
    private int $id;
    private Client $client;
    private $line_items;
    private $estimate; // TODO: eventually will be estimate object
    private $retainer; // TODO: eventually will be retainer object
    private $creator; // TODO: will eventually be creator object
    private $client_key;
    private $number;
    private $purchase_order;
    private $amount;
    private $due_amount;
    private $tax;
    private $tax_amount;
    private $tax2;
    private $tax2_amount;
    private $discount;
    private $discount_amount;
    private $subject;
    private $notes;
    private $currency;
    private $state;
    private $period_start;
    private $period_end;
    private $issue_date;
    private $due_date;
    private $payment_term;
    private $sent_at;
    private $paid_at;
    private $paid_date;
    private $closed_at;
    private $recurring_invoice_id;
    private $created_at;
    private $updated_at;

    /**
     * Invoice constructor.
     *
     * @param  object  $invoice
     */
    public function __construct(object $invoice)
    {
        $this->id = $invoice->id;
        $this->client = new Client($invoice->client);

        foreach ($invoice->line_items as $line_item) {
            $this->line_items[] = new InvoiceLineItem($line_item);
        }

        $this->estimate = $invoice->estimate;
        $this->retainer = $invoice->retainer;
        $this->creator = $invoice->creator;
        $this->client_key = $invoice->client_key;
        $this->number = $invoice->number;
        $this->purchase_order = $invoice->purchase_order;
        $this->amount = $invoice->amount;
        $this->due_amount = $invoice->due_amount;
        $this->tax = $invoice->tax;
        $this->tax_amount = $invoice->tax_amount;
        $this->tax2 = $invoice->tax2;
        $this->tax2_amount = $invoice->tax2_amount;
        $this->discount = $invoice->discount;
        $this->discount_amount = $invoice->discount_amount;
        $this->subject = $invoice->subject;
        $this->notes = $invoice->notes;
        $this->currency = $invoice->currency;
        $this->state = $invoice->state;
        $this->period_start = $invoice->period_start;
        $this->period_end = $invoice->period_end;
        $this->issue_date = $invoice->issue_date;
        $this->due_date = $invoice->due_date;
        $this->payment_term = $invoice->payment_term;
        $this->sent_at = $invoice->sent_at;
        $this->paid_at = $invoice->paid_at;
        $this->paid_date = $invoice->paid_date;
        $this->closed_at = $invoice->closed_at;
        $this->recurring_invoice_id = $invoice->recurring_invoice_id;
        $this->created_at = $invoice->created_at;
        $this->updated_at = $invoice->updated_at;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @return mixed
     */
    public function getLineItems()
    {
        return $this->line_items;
    }

    /**
     * @return mixed
     */
    public function getEstimate()
    {
        return $this->estimate;
    }

    /**
     * @return mixed
     */
    public function getRetainer()
    {
        return $this->retainer;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @return mixed
     */
    public function getClientKey()
    {
        return $this->client_key;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrder()
    {
        return $this->purchase_order;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function getDueAmount()
    {
        return $this->due_amount;
    }

    /**
     * @return mixed
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @return mixed
     */
    public function getTaxAmount()
    {
        return $this->tax_amount;
    }

    /**
     * @return mixed
     */
    public function getTax2()
    {
        return $this->tax2;
    }

    /**
     * @return mixed
     */
    public function getTax2Amount()
    {
        return $this->tax2_amount;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @return mixed
     */
    public function getDiscountAmount()
    {
        return $this->discount_amount;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
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
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return mixed
     */
    public function getPeriodStart()
    {
        return $this->period_start;
    }

    /**
     * @return mixed
     */
    public function getPeriodEnd()
    {
        return $this->period_end;
    }

    /**
     * @return mixed
     */
    public function getIssueDate()
    {
        return $this->issue_date;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->due_date;
    }

    /**
     * @return mixed
     */
    public function getPaymentTerm()
    {
        return $this->payment_term;
    }

    /**
     * @return mixed
     */
    public function getSentAt()
    {
        return $this->sent_at;
    }

    /**
     * @return mixed
     */
    public function getPaidAt()
    {
        return $this->paid_at;
    }

    /**
     * @return mixed
     */
    public function getPaidDate()
    {
        return $this->paid_date;
    }

    /**
     * @return mixed
     */
    public function getClosedAt()
    {
        return $this->closed_at;
    }

    /**
     * @return mixed
     */
    public function getRecurringInvoiceId()
    {
        return $this->recurring_invoice_id;
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
