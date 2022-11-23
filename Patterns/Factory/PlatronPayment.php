<?php

namespace Patterns\Factory;

class PlatronPayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        echo 'Оплата Platron: ' . $order->getSum() . ' руб.' . PHP_EOL;
    }
}