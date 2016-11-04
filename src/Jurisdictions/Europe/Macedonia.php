<?php

namespace BrianFaust\Basket\Jurisdictions\Europe;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\Europe\MacedoniaValueAddedTax;
use Money\Currency;

class Macedonia implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var MacedoniaValueAddedTax
     */
    private $tax;

    /**
     * Macedonia constructor.
     */
    public function __construct()
    {
        $this->tax = new MacedoniaValueAddedTax();
        $this->currency = new Currency('MKD');
    }

    /**
     * @return MacedoniaValueAddedTax
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
