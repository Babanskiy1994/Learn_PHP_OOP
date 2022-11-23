<?php

namespace Patterns\Factory;

class AlfaPointsPaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        return new AlfaPointsPayment();
    }
}