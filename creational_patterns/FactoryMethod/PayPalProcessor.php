<?php

require_once 'PaymentProcessor.php';

class PayPalProcessor implements PaymentProcessor
{
    public function processPayment(float $amount)
    {
        echo "Processing PayPal payment of R{$amount}...\n";
    }
}
