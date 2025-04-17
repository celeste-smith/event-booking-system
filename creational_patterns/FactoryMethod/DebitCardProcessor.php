<?php

// Ensure this file is using the PaymentProcessor interface
require_once 'PaymentProcessor.php';

class DebitCardProcessor implements PaymentProcessor
{
    /**
     * Process a debit card payment of the given amount.
     *
     * @param float $amount
     * @return void
     */
    public function processPayment(float $amount)
    {
        // Simulate debit card payment processing logic
        echo "Processing debit card payment of R{$amount}...\n";

        // Add logic for validating debit card, checking balance, etc.
        // You could interact with an API or service for actual debit card processing.
        // For now, it's a simulation.

        // Simulate the debit card validation process
        $cardNumber = "1234-5678-9876-5432"; // Example card number
        $cardExpirationDate = "12/23"; // Expiration date
        $cardHolderName = "John Doe"; // Cardholder name
        
        // Simulate a check for valid card number and expiration date (simple validation)
        if (!$this->isValidCardNumber($cardNumber)) {
            echo "Invalid debit card number.\n";
            return;
        }

        if (!$this->isValidExpirationDate($cardExpirationDate)) {
            echo "Debit card has expired.\n";
            return;
        }

        // Simulate balance check (mock data)
        $availableBalance = 1000.00; // Example available balance
        if ($amount > $availableBalance) {
            echo "Insufficient funds for Debit Card payment.\n";
            return;
        }

        // If all checks pass, process the payment
        echo "Debit card payment of R{$amount} was successful.\n";
    }

    /**
     * Validate the debit card number (simple check)
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
     * Validate the debit card expiration date.
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
