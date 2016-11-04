<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\CzechRepublicValueAddedTax;
use Money\Currency;

class CzechRepublic implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var CzechRepublicValueAddedTax
     */
    private $tax;

    /**
     * CzechRepublic constructor.
     */
    public function __construct()
    {
        $this->tax = new CzechRepublicValueAddedTax();
        $this->currency = new Currency('CZK');
    }

    /**
     * @return CzechRepublicValueAddedTax
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