<?php
namespace EventBookingSystem\Repositories\Database;

use EventBookingSystem\Repositories\UserRepositoryInterface;
use EventBookingSystem\Entities\User;

class DatabaseUserRepository implements UserRepositoryInterface
{
    public function find(int $id): ?User
    {
        // TODO: Implement database retrieval logic
        return null;
    }

    public function save(User $user): void
    {
        // TODO: Implement database save logic
    }

    public function delete(int $id): void
    {
        // TODO: Implement database delete logic
    }

    public function getAll(): array
    {
        // TODO: Implement retrieval of all users from the database
        return [];
    }
}
