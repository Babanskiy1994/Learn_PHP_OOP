<?php

namespace Patterns\Factory;

class AlfaPayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        echo 'Оплата Alfa-money: ' . $order->getSum() . ' руб.' . PHP_EOL;
    }
}