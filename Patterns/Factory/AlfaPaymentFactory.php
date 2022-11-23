<?php

namespace Patterns\Factory;

class AlfaPaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        return new AlfaPayment();
    }
}