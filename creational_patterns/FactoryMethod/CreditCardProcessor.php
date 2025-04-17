<?php

// Ensure this file is using the PaymentProcessor interface
require_once 'PaymentProcessor.php';

class CreditCardProcessor implements PaymentProcessor
{
    /**
     * Process a credit card payment of the given amount.
     *
     * @param float $amount
     * @return void
     */
    public function processPayment(float $amount)
    {
        // Simulate credit card payment processing logic
        echo "Processing credit card payment of R{$amount}...\n";

        // Add logic for validating credit card, checking funds, etc.
        // You could interact with an API or service for actual credit card processing.
        // For now, it's a simulation.

        // Simulate the credit card validation process
        $cardNumber = "4111-1111-1111-1111"; // Example card number
        $cardExpirationDate = "12/25"; // Expiration date
        $cardHolderName = "Jane Doe"; // Cardholder name
        
        // Simulate a check for valid card number and expiration date (simple validation)
        if (!$this->isValidCardNumber($cardNumber)) {
            echo "Invalid credit card number.\n";
            return;
        }

        if (!$this->isValidExpirationDate($cardExpirationDate)) {
            echo "Credit card has expired.\n";
            return;
        }

        // Simulate balance check (mock data)
        $availableCredit = 5000.00; // Example available credit limit
        if ($amount > $availableCredit) {
            echo "Insufficient credit for Credit Card payment.\n";
            return;
        }

        // If all checks pass, process the payment
        echo "Credit card payment of R{$amount} was successful.\n";
    }

    /**
     * Validate the credit card number (simple check)
     * In a real-world scenario, this would involve a Luhn check or API validation.
     *
     * @param string $cardNumber
     * @return bool
     */
    private function isValidCardNumber($cardNumber)
    {
        // Simple check: Check if the card number length is correct (example)
        if (strlen($cardNumber) == 19) {
            return true; // Simulate a valid card number
        }
        return false; // Invalid card number
    }

    /**
     * Validate the credit card expiration date.
     *
     * @param string $expirationDate
     * @return bool
     */
    private function isValidExpirationDate($expirationDate)
    {
        // Simple check: Validate the expiration date format (MM/YY)
        $currentDate = date("m/y");
        if ($expirationDate >= $currentDate) {
            return true; // Valid expiration date
        }
        return false; // Expired card
    }
}
