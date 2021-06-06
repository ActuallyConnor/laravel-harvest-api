<?php


namespace Actuallyconnor\LaravelHarvestApi\Harvest\Invoices;


class InvoiceLineItem
{

    private $id;
    private $project; // object
    private $kind;
    private $description;
    private $quantity;
    private $unit_price;
    private $amount;
    private $taxed;
    private $taxed2;

    public function __construct($line_item)
    {
        $this->id          = $line_item->id;
        $this->project     = $line_item->project;
        $this->kind        = $line_item->kind;
        $this->description = $line_item->description;
        $this->quantity    = $line_item->quantity;
        $this->unit_price  = $line_item->unit_price;
        $this->amount      = $line_item->amount;
        $this->taxed       = $line_item->taxed;
        $this->taxed2      = $line_item->taxed2;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @return mixed
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
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
    public function getTaxed()
    {
        return $this->taxed;
    }

    /**
     * @return mixed
     */
    public function getTaxed2()
    {
        return $this->taxed2;
    }

}
