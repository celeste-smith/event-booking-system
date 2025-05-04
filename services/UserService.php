<?php

namespace Services;

use Repositories\UserRepository;
use Models\User;

class UserService
{
    private UserRepository $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function createUser(array $data): User
    {
        // Validate required fields
        if (empty($data['name']) || empty($data['email'])) {
            throw new \InvalidArgumentException("Name and email are required.");
        }

        $user = new User($data['name'], $data['email']);
        return $this->userRepo->save($user);
    }

    public function getUserById(string $userId): ?User
    {
        return $this->userRepo->findById($userId);
    }
}
