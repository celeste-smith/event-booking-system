<?php

require_once 'User.php';
require_once 'Customer.php';
require_once 'Admin.php';

/**
 * Simple Factory to create User instances
 */
class UserFactory
{
    /**
     * Create a User object based on type
     *
     * @param string $type The type of user to create ('customer', 'admin')
     * @param array $data Optional user data (like name, email, etc.)
     * @return User|null Returns an instance of User or null if type is invalid
     */
    public static function createUser(string $type, array $data = []): ?User
    {
        switch (strtolower($type)) {
            case 'customer':
                return new Customer(
                    $data['id'] ?? null,
                    $data['name'] ?? '',
                    $data['email'] ?? '',
                    $data['password'] ?? ''
                );
            case 'admin':
                return new Admin(
                    $data['id'] ?? null,
                    $data['name'] ?? '',
                    $data['email'] ?? '',
                    $data['password'] ?? ''
                );
            default:
                return null;
        }
    }
}
