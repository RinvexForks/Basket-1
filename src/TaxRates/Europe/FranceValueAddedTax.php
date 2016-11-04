<?php

namespace BrianFaust\Basket\TaxRates\Europe;

use BrianFaust\Basket\Contracts\TaxRate;

class FranceValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * FranceValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.20;
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
