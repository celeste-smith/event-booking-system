<?php
// File: repositories/NotificationRepositoryInterface.php

namespace EventBookingSystem\Repositories;

use EventBookingSystem\Entities\Notification;

interface NotificationRepositoryInterface
{
    public function find(int $id): ?Notification;
    public function save(Notification $notification): void;
    public function delete(int $id): void;
    public function getAll(): array;
}
