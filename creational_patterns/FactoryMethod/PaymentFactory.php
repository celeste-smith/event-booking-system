<?php

require_once 'CreditCardProcessor.php';
require_once 'PayPalProcessor.php';
require_once 'DebitCardProcessor.php'; // Include DebitCardProcessor

// Factory class to decide which payment processor to use
class PaymentProcessorFactory
{
    /**
     * Factory method to return the appropriate payment processor
     *
     * @param string $paymentMethod
     * @return PaymentProcessor
     */
    public static function createPaymentProcessor(string $paymentMethod): PaymentProcessor
    {
        if ($paymentMethod == 'creditcard') {
            return new CreditCardProcessor(); // Return credit card processor
        } elseif ($paymentMethod == 'paypal') {
            return new PayPalProcessor(); // Return PayPal processor
        } elseif ($paymentMethod == 'debitcard') {
            return new DebitCardProcessor(); // Return Debit Card processor
        } else {
            throw new Exception("Payment method {$paymentMethod} not supported.");
        }
    }
}
