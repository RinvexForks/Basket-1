<?php

/*
 * This file is part of Basket.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Basket\Transformers;

use BrianFaust\Basket\Order;

class SerializeTransformer extends AbstractTransformer
{
    /**
     * @param Order $order
     *
     * @return string
     */
    public function transform(Order $order)
    {
        return value_serialise($this->build($order));
    }
}
