<?php

use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCreateCreditCardProcessor()
    {
        $processor = PaymentProcessorFactory::createProcessor('CreditCard');
        $this->assertInstanceOf(CreditCardProcessor::class, $processor);
    }

    public function testCreatePayPalProcessor()
    {
        $processor = PaymentProcessorFactory::createProcessor('PayPal');
        $this->assertInstanceOf(PayPalProcessor::class, $processor);
    }

    public function testCreateDebitCardProcessor()
    {
        $processor = PaymentProcessorFactory::createProcessor('DebitCard');
        $this->assertInstanceOf(DebitCardProcessor::class, $processor);
    }
}
