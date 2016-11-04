<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\IowaValueAddedTax;
use Money\Currency;

class Iowa implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var IowaValueAddedTax
     */
    private $tax;

    /**
     * Iowa constructor.
     */
    public function __construct()
    {
        $this->tax = new IowaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return IowaValueAddedTax
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