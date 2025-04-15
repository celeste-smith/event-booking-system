<?php
class User {
    private $userId;
    private $name;
    private $email;
    private $password;
    private $role;

    // Constructor
    public function __construct($name, $email, $password, $role = "user") {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    // Getters and setters
    public function getUserId() {
        return $this->userId;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    // Function: Register
    public function register($pdo) {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return "Email already registered.";
        }

        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        $insertSql = "INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :role)";
        $insertStmt = $pdo->prepare($insertSql);
        $insertStmt->bindParam(':name', $this->name);
        $insertStmt->bindParam(':email', $this->email);
        $insertStmt->bindParam(':password', $hashedPassword);
        $insertStmt->bindParam(':role', $this->role);

        if ($insertStmt->execute()) {
            $this->userId = $pdo->lastInsertId();
            return true;
        } else {
            return "Registration failed.";
        }
    }

    // Function: Login
    public function login($pdo) {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($this->password, $user['password'])) {
            $this->userId = $user['userId'];
            $this->name = $user['name'];
            $this->role = $user['role'];
            return true;
        } else {
            return false;
        }
    }

    // Function: Update Profile
    public function updateProfile($pdo) {
        $sql = "UPDATE users SET name = :name, email = :email WHERE userId = :userId";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':userId', $this->userId);
        return $stmt->execute();
    }

    // Function: View Bookings
    public function viewBookings($pdo) {
        $sql = "SELECT * FROM bookings WHERE userId = :userId";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':userId', $this->userId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
