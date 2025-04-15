<?php

class User {
    private $userId;
    private $name;
    private $email;
    private $password;
    private $role;

    public function __construct($userId, $name, $email, $password, $role) {
        $this->userId = $userId;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    // Getter and Setter Methods
    public function getUserId() {
        return $this->userId;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRole() {
        return $this->role;
    }

    // Core Methods
    public function register() {
        // Code for user registration
    }

    public function login() {
        // Code for user login
    }

    public function updateProfile() {
        // Code to update user profile
    }

    public function viewBookings() {
        // Code to view bookings
    }
}

?>

