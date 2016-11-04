<?php

namespace BrianFaust\Basket\TaxRates\Europe;

use BrianFaust\Basket\Contracts\TaxRate;

class DenmarkValueAddedTax implements TaxRate
{
    /**
     * @var float
     */
    private $rate;

    /**
     * DenmarkValueAddedTax constructor.
     */
    public function __construct()
    {
        $this->rate = 0.25;
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
