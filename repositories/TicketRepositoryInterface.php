<?php
// File: repositories/TicketRepositoryInterface.php

namespace EventBookingSystem\Repositories;

use EventBookingSystem\Entities\Ticket;

interface TicketRepositoryInterface
{
    public function find(int $id): ?Ticket;
    public function save(Ticket $ticket): void;
    public function delete(int $id): void;
    public function getAll(): array;
}
