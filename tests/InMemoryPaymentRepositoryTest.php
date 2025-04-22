<?php
// File: tests/InMemoryPaymentRepositoryTest.php

use PHPUnit\Framework\TestCase;
use EventBookingSystem\Repositories\InMemory\InMemoryPaymentRepository;
use EventBookingSystem\Entities\Payment;

class InMemoryPaymentRepositoryTest extends TestCase
{
    private $repository;

    protected function setUp(): void
    {
        $this->repository = new InMemoryPaymentRepository();
    }

    public function testCreateAndRead()
    {
        $payment = new Payment('1', 'booking1', 100.00);
        $this->repository->create($payment);
        $retrieved = $this->repository->read('1');
        $this->assertSame($payment, $retrieved);
    }

    public function testUpdate()
    {
        $payment = new Payment('1', 'booking1', 100.00);
        $this->repository->create($payment);
        $payment->setAmount(150.00);
        $this->repository->update($payment);
        $retrieved = $this->repository->read('1');
        $this->assertEquals(150.00, $retrieved->getAmount());
    }

    public function testDelete()
    {
        $payment = new Payment('1', 'booking1', 100.00);
        $this->repository->create($payment);
        $this->repository->delete($payment);
        $retrieved = $this->repository->read('1');
        $this->assertNull($retrieved);
    }

    public function testGetAll()
    {
        $payment1 = new Payment('1', 'booking1', 100.00);
        $payment2 = new Payment('2', 'booking2', 200.00);
        $this->repository->create($payment1);
        $this->repository->create($payment2);
        $allPayments = $this->repository->getAll();
        $this->assertCount(2, $allPayments);
        $this->assertContains($payment1, $allPayments);
        $this->assertContains($payment2, $allPayments);
    }
}

