<?php

namespace Patterns\Factory;

class PlatronPaymentFactory implements PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface
    {
        return new PlatronPayment();
    }
}