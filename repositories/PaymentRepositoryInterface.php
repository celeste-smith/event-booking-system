<?php
// File: repositories/PaymentRepositoryInterface.php

namespace EventBookingSystem\Repositories;

use EventBookingSystem\Entities\Payment;

interface PaymentRepositoryInterface
{
    public function find(int $id): ?Payment;
    public function save(Payment $payment): void;
    public function delete(int $id): void;
    public function getAll(): array;
}
