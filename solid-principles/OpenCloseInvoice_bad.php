<?php

/**
 * composer Package class
 */

class InvoiceItem
{
    private $qty;
    private $discount;
    private $tax;

    private $title;
    private $unit;

    public function __construct()
    {
        $this->qty = 1;
        $this->discount = 0.0;
        $this->tax = 0.0;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
        return $this;
    }

    public function setPrice(string $unit)
    {
        $this->unit = $unit;
        return $this;
    }

    public function setUnits(string $unit)
    {
        $this->unit = $unit;
        return $this;
    }
}

/**
 * Main application apply
 */

class Invoice
{
    public function generate()
    {
        $item = (new InvoiceItem())
            ->setTitle('Pen')
            //->setDescription('Altes chuti jel') we can not implement description on package
            ->setPrice('10.00');
    }
}
