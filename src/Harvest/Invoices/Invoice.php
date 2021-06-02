<?php

namespace Actuallyconnor\LaravelHarvestApi\Harvest\Invoices;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Client;

/**
 * TODO: add tests and fill out the rest of this object
 * Class Invoice
 * @package Actuallyconnor\LaravelHarvestApi\Harvest\Invoices
 */
class Invoice
{
    private int $id;
    private Client $client;
    private array $line_items;
    private $estimate; // TODO: eventually will be estimate object
    private $retainer; // TODO: eventually will be retainer object
    private $creator; // TODO: will eventually be creator object
    private string $client_key;
    private string $number;
    private string $purchase_order;
    private float $amount;
    private float $due_amount;
    private float $tax;
    private float $tax_amount;
    private float $tax_2;
    private float $tax_2_amount;
    private float $discount;
    private float $discount_amount;
    private string $subject;
    private string $notes;
    private string $currency;
    private string $state;
    private string $period_start;
    private string $period_end;
    private string $issue_date;
    private string $due_date;
    private string $payment_term;
    private string $sent_at;
    private string $paid_at;
    private string $paid_date;
    private string $closed_at;
    private int $recurring_invoice_id;
    private string $created_at;
    private string $updated_at;

    /**
     * @return int
     */
    public function get_id(): int
    {
        return $this->id;
    }

    /**
     * @return Client
     */
    public function get_client(): Client
    {
        return $this->client;
    }

    /**
     * @return array
     */
    public function get_line_items(): array
    {
        return $this->line_items;
    }

    /**
     * @return mixed
     */
    public function get_estimate()
    {
        return $this->estimate;
    }

    /**
     * @return mixed
     */
    public function get_retainer()
    {
        return $this->retainer;
    }

    /**
     * @return mixed
     */
    public function get_creator()
    {
        return $this->creator;
    }

    /**
     * @return string
     */
    public function get_client_key(): string
    {
        return $this->client_key;
    }

    /**
     * @return string
     */
    public function get_number(): string
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function get_purchase_order(): string
    {
        return $this->purchase_order;
    }

    /**
     * @return float
     */
    public function get_amount(): float
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function get_due_amount(): float
    {
        return $this->due_amount;
    }

    /**
     * @return float
     */
    public function get_tax(): float
    {
        return $this->tax;
    }

    /**
     * @return float
     */
    public function get_tax_amount(): float
    {
        return $this->tax_amount;
    }

    /**
     * @return float
     */
    public function get_tax_2(): float
    {
        return $this->tax_2;
    }

    /**
     * @return float
     */
    public function get_tax_2_amount(): float
    {
        return $this->tax_2_amount;
    }

    /**
     * @return float
     */
    public function get_discount(): float
    {
        return $this->discount;
    }

    /**
     * @return float
     */
    public function get_discount_amount(): float
    {
        return $this->discount_amount;
    }

    /**
     * @return string
     */
    public function get_subject(): string
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function get_notes(): string
    {
        return $this->notes;
    }

    /**
     * @return string
     */
    public function get_currency(): string
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function get_state(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function get_period_start(): string
    {
        return $this->period_start;
    }

    /**
     * @return string
     */
    public function get_period_end(): string
    {
        return $this->period_end;
    }

    /**
     * @return string
     */
    public function get_issue_date(): string
    {
        return $this->issue_date;
    }

    /**
     * @return string
     */
    public function get_due_date(): string
    {
        return $this->due_date;
    }

    /**
     * @return string
     */
    public function get_payment_term(): string
    {
        return $this->payment_term;
    }

    /**
     * @return string
     */
    public function get_sent_at(): string
    {
        return $this->sent_at;
    }

    /**
     * @return string
     */
    public function get_paid_at(): string
    {
        return $this->paid_at;
    }

    /**
     * @return string
     */
    public function get_paid_date(): string
    {
        return $this->paid_date;
    }

    /**
     * @return string
     */
    public function get_closed_at(): string
    {
        return $this->closed_at;
    }

    /**
     * @return int
     */
    public function get_recurring_invoice_id(): int
    {
        return $this->recurring_invoice_id;
    }

    /**
     * @return string
     */
    public function get_created_at(): string
    {
        return $this->created_at;
    }

    /**
     * @return string
     */
    public function get_updated_at(): string
    {
        return $this->updated_at;
    }
}
