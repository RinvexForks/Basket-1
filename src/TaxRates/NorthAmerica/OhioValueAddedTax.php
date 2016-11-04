<?php

namespace BrianFaust\Basket\TaxRates\NorthAmerica;

use BrianFaust\Basket\Contracts\TaxRate;

class OhioValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * OhioValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.0575;
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
