<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\BosniaHerzegovinaValueAddedTax;
use Money\Currency;

class BosniaHerzegovina implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var BosniaHerzegovinaValueAddedTax
     */
    private $tax;

    /**
     * BosniaHerzegovina constructor.
     */
    public function __construct()
    {
        $this->tax = new BosniaHerzegovinaValueAddedTax();
        $this->currency = new Currency('BAM');
    }

    /**
     * @return BosniaHerzegovinaValueAddedTax
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