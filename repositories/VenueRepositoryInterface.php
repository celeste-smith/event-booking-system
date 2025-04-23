<?php
// File: repositories/VenueRepositoryInterface.php

namespace EventBookingSystem\Repositories;

use EventBookingSystem\Entities\Venue;

interface VenueRepositoryInterface
{
    public function find(int $id): ?Venue;
    public function save(Venue $venue): void;
    public function delete(int $id): void;
    public function getAll(): array;
}
