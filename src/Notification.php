<?php

class Notification {
    private $notificationId;
    private $userId;
    private $message;
    private $sentDate;
    private $readStatus;

    public function __construct($userId, $message) {
        $this->notificationId = uniqid('notif_');
        $this->userId = $userId;
        $this->message = $message;
        $this->sentDate = date('Y-m-d H:i:s');
        $this->readStatus = false;
    }

    // Getters
    public function getNotificationId() {
        return $this->notificationId;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getMessage() {
        return $this->message;
    }

    public function getSentDate() {
        return $this->sentDate;
    }

    public function isRead() {
        return $this->readStatus;
    }

    // Send Notification (e.g., insert into DB)
    public function sendNotification($pdo) {
        $sql = "INSERT INTO notifications (notificationId, userId, message, sentDate, readStatus)
                VALUES (:notificationId, :userId, :message, :sentDate, :readStatus)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':notificationId' => $this->notificationId,
            ':userId' => $this->userId,
            ':message' => $this->message,
            ':sentDate' => $this->sentDate,
            ':readStatus' => $this->readStatus ? 1 : 0
        ]);
    }

    // Mark the notification as read
    public function markAsRead($pdo) {
        $this->readStatus = true;
        $sql = "UPDATE notifications SET readStatus = 1 WHERE notificationId = :notificationId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':notificationId' => $this->notificationId]);
    }
}
?>

