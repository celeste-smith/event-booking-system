<?php
// File: repositories/inmemory/InMemoryUserRepository.php

namespace EventBookingSystem\Repositories\InMemory;

use EventBookingSystem\Repositories\UserRepositoryInterface;
use EventBookingSystem\Entities\User;

class InMemoryUserRepository implements UserRepositoryInterface
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

