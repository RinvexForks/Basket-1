<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\RussiaValueAddedTax;
use Money\Currency;

class Russia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var RussiaValueAddedTax
     */
    private $tax;

    /**
     * Russia constructor.
     */
    public function __construct()
    {
        $this->tax = new RussiaValueAddedTax();
        $this->currency = new Currency('RUB');
    }

    /**
     * @return RussiaValueAddedTax
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
