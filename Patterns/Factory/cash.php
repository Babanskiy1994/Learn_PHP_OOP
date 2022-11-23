<?php

namespace Patterns\Factory;


$orderData = [
    [
        'order' => new Order(5000),
        'paymentType' => 'cash',
    ],
    [
        'order' => new Order(2000),
        'paymentType' => 'alfa-points',
    ]
];

echo 'Наличный расчет: ' . PHP_EOL;

foreach ($orderData as $orderDataItem){
    $order = $orderDataItem['order'];
    $paymentType = $orderDataItem['paymentType'];
    $payment = PaymentHelper::getPaymentFactory($paymentType)->createPayment();
    $payment->pay($order);
}

echo PHP_EOL;
