<?php
// File: repositories/BookingRepositoryInterface.php

namespace EventBookingSystem\Repositories;

use EventBookingSystem\Entities\Booking;

interface BookingRepositoryInterface
{
    public function find(int $id): ?Booking;
    public function save(Booking $booking): void;
    public function delete(int $id): void;
    public function getAll(): array;
}

