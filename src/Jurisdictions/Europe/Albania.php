<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\AlbaniaValueAddedTax;
use Money\Currency;

class Albania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var AlbaniaValueAddedTax
     */
    private $tax;

    /**
     * Albania constructor.
     */
    public function __construct()
    {
        $this->tax = new AlbaniaValueAddedTax();
        $this->currency = new Currency('ALL');
    }

    /**
     * @return AlbaniaValueAddedTax
     */
    public function rate()
    {
        return $this->tax;
    }

    /**
     * @return Currency
     */
    public function currency()
    {
        return $this->currency;
    }
}