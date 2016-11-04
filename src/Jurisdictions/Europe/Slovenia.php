<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\SloveniaValueAddedTax;
use Money\Currency;

class Slovenia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var SloveniaValueAddedTax
     */
    private $tax;

    /**
     * Slovenia constructor.
     */
    public function __construct()
    {
        $this->tax = new SloveniaValueAddedTax();
        $this->currency = new Currency('EUR');
    }

    /**
     * @return SloveniaValueAddedTax
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
