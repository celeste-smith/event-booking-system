<?php
require_once 'User.php';

class Admin extends User {

    // Constructor
    public function __construct($name, $email, $password) {
        parent::__construct($name, $email, $password, "admin");
    }

    // Admin-specific function: View All Users
    public function viewAllUsers($pdo) {
        $sql = "SELECT userId, name, email, role FROM users";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Admin-specific function: Delete a user
    public function deleteUser($pdo, $userIdToDelete) {
        $sql = "DELETE FROM users WHERE userId = :userId";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':userId', $userIdToDelete);
        return $stmt->execute();
    }

    // Admin-specific function: Promote a user to admin
    public function promoteToAdmin($pdo, $userIdToPromote) {
        $sql = "UPDATE users SET role = 'admin' WHERE userId = :userId";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':userId', $userIdToPromote);
        return $stmt->execute();
    }

    // You can add more admin functions like managing events, generating reports, etc.
}
?>
