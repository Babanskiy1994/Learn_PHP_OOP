<?php

namespace Patterns\Factory;


$orderData = [
    [
        'order' => new Order(500),
        'paymentType' => 'alfa-money',
    ],
    [
        'order' => new Order(3000),
        'paymentType' => 'platron',
    ]
];

echo 'Безналичный расчет: ' . PHP_EOL;

foreach ($orderData as $orderDataItem){
    $order = $orderDataItem['order'];
    $paymentType = $orderDataItem['paymentType'];
    $payment = PaymentHelper::getPaymentFactory($paymentType)->createPayment();
    $payment->pay($order);
}

echo PHP_EOL;
