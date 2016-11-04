<?php

namespace BrianFaust\Basket\TaxRates\Europe;

use BrianFaust\Basket\Contracts\TaxRate;

class UkraineValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * UkraineValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.21;
    }

    /**
     * @return float
     */
    public function float()
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function percentage()
    {
        return intval($this->rate * 100);
    }
}