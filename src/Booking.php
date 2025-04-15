<?php

class Booking {
    private $bookingId;
    private $bookingDate;
    private $status;

    private $userId;
    private $eventId;
    private $paymentId;
    private $ticketId;

    public function __construct($userId, $eventId, $paymentId = null, $ticketId = null, $status = "pending") {
        $this->bookingId = uniqid('booking_');
        $this->bookingDate = date("Y-m-d");
        $this->userId = $userId;
        $this->eventId = $eventId;
        $this->paymentId = $paymentId;
        $this->ticketId = $ticketId;
        $this->status = $status;
    }

    // Getters
    public function getBookingId() {
        return $this->bookingId;
    }

    public function getBookingDate() {
        return $this->bookingDate;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getEventId() {
        return $this->eventId;
    }

    public function getPaymentId() {
        return $this->paymentId;
    }

    public function getTicketId() {
        return $this->ticketId;
    }

    // Setters
    public function setStatus($status) {
        $this->status = $status;
    }

    public function setPaymentId($paymentId) {
        $this->paymentId = $paymentId;
    }

    public function setTicketId($ticketId) {
        $this->ticketId = $ticketId;
    }

    // Methods

    // Create a new booking
    public function createBooking($pdo) {
        $sql = "INSERT INTO bookings (bookingId, bookingDate, status, userId, eventId, paymentId, ticketId)
                VALUES (:bookingId, :bookingDate, :status, :userId, :eventId, :paymentId, :ticketId)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':bookingId' => $this->bookingId,
            ':bookingDate' => $this->bookingDate,
            ':status' => $this->status,
            ':userId' => $this->userId,
            ':eventId' => $this->eventId,
            ':paymentId' => $this->paymentId,
            ':ticketId' => $this->ticketId
        ]);
    }

    // Cancel booking
    public function cancelBooking($pdo) {
        $this->status = 'cancelled';
        $sql = "UPDATE bookings SET status = 'cancelled' WHERE bookingId = :bookingId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':bookingId' => $this->bookingId]);
    }

    // Update booking status
    public function updateStatus($pdo, $newStatus) {
        $this->status = $newStatus;
        $sql = "UPDATE bookings SET status = :status WHERE bookingId = :bookingId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':status' => $newStatus,
            ':bookingId' => $this->bookingId
        ]);
    }
}
?>

