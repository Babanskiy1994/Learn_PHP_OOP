<?php

namespace Patterns\Factory;

class AlfaPointsPayment implements PaymentInterface
{
    public function pay(Order $order): void
    {
        echo 'Оплата баллами: ' . $order->getSum() . ' бонусов.' . PHP_EOL;
    }
}