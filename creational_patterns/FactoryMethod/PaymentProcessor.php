<?php

// Interface for all payment processors
interface PaymentProcessor
{
    /**
     * Process a payment of a given amount
     *
     * @param float $amount The amount to process
     * @return void
     */
    public function processPayment(float $amount);
}
