<?php

namespace Patterns\Factory;

class PaymentHelper
{
    public static function getPaymentFactory(string $paymentType): PaymentFactoryInterface
    {
        switch ($paymentType){
            case 'cash': {
                return new CashPaymentFactory();
            }
            case 'alfa-points': {
                return new AlfaPointsPaymentFactory();
            }
            case 'alfa-money': {
                return new AlfaPaymentFactory();
            }
            case 'platron': {
                return new PlatronPaymentFactory();
            }
            default: {
                throw new \Exception('Неизвестный тип оплаты: ' . $paymentType);
            }
        }
    }
}