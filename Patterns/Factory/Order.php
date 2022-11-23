<?php

namespace Patterns\Factory;

class Order
{
    private int $sum;

    public function __construct(int $sum)
    {
        $this->sum = $sum;
    }

    public function getSum()
    {
        return $this->sum;
    }
}