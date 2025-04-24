<?php
namespace EventBookingSystem\Factories;

use EventBookingSystem\Repositories\UserRepositoryInterface;
use EventBookingSystem\Repositories\InMemory\InMemoryUserRepository;
use EventBookingSystem\Repositories\Database\DatabaseUserRepository;
// Include other repository interfaces and implementations as needed

class RepositoryFactory
{
    public static function createUserRepository(string $storageType): UserRepositoryInterface
    {
        switch (strtoupper($storageType)) {
            case 'MEMORY':
                return new InMemoryUserRepository();
            // case 'DATABASE':
            //     return new DatabaseUserRepository(); // Future implementation
            default:
                throw new \InvalidArgumentException("Invalid storage type: $storageType");
        }
    }

    // Add similar methods for other repositories
}
