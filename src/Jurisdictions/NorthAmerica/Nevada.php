<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\NevadaValueAddedTax;
use Money\Currency;

class Nevada implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var NevadaValueAddedTax
     */
    private $tax;

    /**
     * Nevada constructor.
     */
    public function __construct()
    {
        $this->tax = new NevadaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return NevadaValueAddedTax
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