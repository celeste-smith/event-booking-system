<?php

// Ensure this file is using the PaymentProcessor interface
require_once 'PaymentProcessor.php';

class PayPalProcessor implements PaymentProcessor
{
    /**
     * Process a PayPal payment of the given amount.
     *
     * @param float $amount
     * @return void
     */
    public function processPayment(float $amount)
    {
        // Simulate PayPal payment processing logic
        echo "Processing PayPal payment of R{$amount}...\n";

        // Add logic for validating PayPal account, checking balance, etc.
        // You could interact with an API or service for actual PayPal payment processing.
        // For now, it's a simulation.

        // Simulate PayPal account validation (mock data)
        $accountEmail = "user@example.com"; // Example PayPal account email
        $accountBalance = 3000.00; // Example account balance

        // Simulate balance check
        if ($amount > $accountBalance) {
            echo "Insufficient funds in PayPal account.\n";
            return;
        }

        // If the balance check passes, process the payment
        echo "PayPal payment of R{$amount} was successful.\n";
    }
}
