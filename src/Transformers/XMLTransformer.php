<?php

namespace BrianFaust\Basket\Transformers;

use BrianFaust\Basket\Order;

class XMLTransformer extends AbstractTransformer
{
    /**
     * @param Order $order
     *
     * @return mixed
     */
    public function transform(Order $order)
    {
        return xml_serialise($this->build($order));
    }
}