<?php
namespace EventBookingSystem\Services;

use EventBookingSystem\Repositories\UserRepositoryInterface;
use EventBookingSystem\Factories\RepositoryFactory;

class UserService
{
    private UserRepositoryInterface $userRepository;

    public function __construct(string $storageType)
    {
        $this->userRepository = RepositoryFactory::createUserRepository($storageType);
    }

    public function getUser(int $id)
    {
        return $this->userRepository->find($id);
    }

    // Other service methods...
}
