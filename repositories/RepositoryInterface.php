<?php
// File: repositories/RepositoryInterface.php

namespace EventBookingSystem\Repositories;

interface RepositoryInterface
{
    public function create($entity): void;

    public function read($id);

    public function update($entity): void;

    public function delete($entity): void;

    public function getAll(): array;
}

