<?php

namespace Actuallyconnor\LaravelHarvestApi\Harvest\Estimates;

use Actuallyconnor\LaravelHarvestApi\Harvest\Clients\Client;

class Estimate
{
    private int $id;
    private Client $client;
    private array $line_items;
    private $creator; // TODO: this will be a creator object?
    private string $client_key;
    private string $number;
    private string $purchase_order;
    private float $amount;
    private float $tax;
    private float $tax_amount;
    private float $tax2;
    private float $tax2_amount;
    private float $discount;
    private float $discount_amount;
    private string $subject;
    private string $notes;
    private string $currency;
    private string $state;
    private string $issue_date;
    private string $sent_at;
    private string $accepted_at;
    private string $declined_at;
    private string $created_at;
    private string $updated_at;

    public function __construct()
    {
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
     * @return array
     */
    public function getLineItems(): array
    {
        return $this->line_items;
    }

    /**
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * @return string
     */
    public function getClientKey(): string
    {
        return $this->client_key;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getPurchaseOrder(): string
    {
        return $this->purchase_order;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * @return float
     */
    public function getTaxAmount(): float
    {
        return $this->tax_amount;
    }

    /**
     * @return float
     */
    public function getTax2(): float
    {
        return $this->tax2;
    }

    /**
     * @return float
     */
    public function getTax2Amount(): float
    {
        return $this->tax2_amount;
    }

    /**
     * @return float
     */
    public function getDiscount(): float
    {
        return $this->discount;
    }

    /**
     * @return float
     */
    public function getDiscountAmount(): float
    {
        return $this->discount_amount;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        return $this->notes;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getIssueDate(): string
    {
        return $this->issue_date;
    }

    /**
     * @return string
     */
    public function getSentAt(): string
    {
        return $this->sent_at;
    }

    /**
     * @return string
     */
    public function getAcceptedAt(): string
    {
        return $this->accepted_at;
    }

    /**
     * @return string
     */
    public function getDeclinedAt(): string
    {
        return $this->declined_at;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }
}
