<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Jurisdictions\SouthAmerica;

use BrianFaust\Basket\Contracts\Jurisdiction;
use BrianFaust\Basket\TaxRates\SouthAmerica\PeruValueAddedTax;
use Money\Currency;

class Peru implements Jurisdiction
{
    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var PeruValueAddedTax
     */
    private $tax;

    /**
     * Peru constructor.
     */
    public function __construct()
    {
        $this->tax = new PeruValueAddedTax();
        $this->currency = new Currency('PEN');
    }

    /**
     * @return PeruValueAddedTax
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
