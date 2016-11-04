<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\WyomingValueAddedTax;
use Money\Currency;

class Wyoming implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var WyomingValueAddedTax
     */
    private $tax;

    /**
     * Wyoming constructor.
     */
    public function __construct()
    {
        $this->tax = new WyomingValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return WyomingValueAddedTax
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