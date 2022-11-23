<?php

namespace Patterns\Factory;

interface PaymentInterface
{
    public function pay(Order $order): void;
}