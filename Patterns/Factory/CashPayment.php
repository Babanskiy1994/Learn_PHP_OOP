<?php

namespace Patterns\Factory;

class CashPayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        echo 'Оплата наличными: ' . $order->getSum() . ' руб.' . PHP_EOL;
    }
}