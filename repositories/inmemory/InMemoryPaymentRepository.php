<?php
// File: repositories/inmemory/InMemoryPaymentRepository.php

namespace EventBookingSystem\Repositories\InMemory;

use EventBookingSystem\Repositories\PaymentRepositoryInterface;
use EventBookingSystem\Entities\Payment;

class InMemoryPaymentRepository implements PaymentRepositoryInterface
{
    private array $storage = [];

    public function create($entity): void
    {
        $this->storage[$entity->getId()] = $entity;
    }

    public function read($id)
    {
        return $this->storage[$id] ?? null;
    }

    public function update($entity): void
    {
        if (isset($this->storage[$entity->getId()])) {
            $this->storage[$entity->getId()] = $entity;
        }
    }

    public function delete($entity): void
    {
        unset($this->storage[$entity->getId()]);
    }

    public function getAll(): array
    {
        return array_values($this->storage);
    }
}

