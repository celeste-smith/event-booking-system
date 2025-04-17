<?php

require_once 'PaymentProcessor.php';

class CreditCardProcessor implements PaymentProcessor
{
    public function processPayment(float $amount)
    {
        echo "Processing Credit Card payment of R{$amount}...\n";
    }
}
