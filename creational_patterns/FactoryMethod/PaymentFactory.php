<?php

require_once 'CreditCardProcessor.php';
require_once 'PayPalProcessor.php';

class PaymentFactory
{
    public static function createProcessor(string $type): PaymentProcessor
    {
        switch (strtolower($type)) {
            case 'creditcard':
                return new CreditCardProcessor();
            case 'paypal':
                return new PayPalProcessor();
            default:
                throw new Exception("Unsupported payment type: $type");
        }
    }
}
