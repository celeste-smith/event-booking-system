<?php

require_once __DIR__ . '/../src/User.php';
require_once __DIR__ . '/../src/Admin.php';
require_once __DIR__ . '/../src/Customer.php';

class UserFactory
{
    public static function createUser(string $type, array $userData): User
    {
        switch (strtolower($type)) {
            case 'admin':
                return new Admin(
                    $userData['id'] ?? null,
                    $userData['name'],
                    $userData['email'],
                    $userData['password']
                );

            case 'customer':
                return new Customer(
                    $userData['id'] ?? null,
                    $userData['name'],
                    $userData['email'],
                    $userData['password']
                );

            default:
                throw new Exception("Invalid user type: " . $type);
        }
    }
}

