<?php

namespace Patterns\Factory;

interface PaymentFactoryInterface
{
    public static function createPayment(): PaymentInterface;
}