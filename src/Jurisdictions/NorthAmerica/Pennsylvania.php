<?php

namespace BrianFaust\Basket\Jurisdictions\NorthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\NorthAmerica\PennsylvaniaValueAddedTax;
use Money\Currency;

class Pennsylvania implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PennsylvaniaValueAddedTax
     */
    private $tax;

    /**
     * Pennsylvania constructor.
     */
    public function __construct()
    {
        $this->tax = new PennsylvaniaValueAddedTax();
        $this->currency = new Currency('USD');
    }

    /**
     * @return PennsylvaniaValueAddedTax
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