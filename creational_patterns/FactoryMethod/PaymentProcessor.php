<?php

interface PaymentProcessor
{
    public function processPayment(float $amount);
}
