<?php
// File: repositories/UserRepositoryInterface.php

namespace EventBookingSystem\Repositories;

use EventBookingSystem\Entities\User;

interface UserRepositoryInterface
{
    public function find(int $id): ?User;
    public function save(User $user): void;
    public function delete(int $id): void;
    public function getAll(): array;
}
