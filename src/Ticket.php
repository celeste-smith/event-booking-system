<?php

class Ticket {
    private $ticketId;
    private $qrCode;
    private $seatNumber;
    private $status;

    private $bookingId;

    public function __construct($seatNumber, $bookingId, $status = 'active') {
        $this->ticketId = uniqid('ticket_');
        $this->seatNumber = $seatNumber;
        $this->qrCode = $this->generateQRCode();
        $this->status = $status;
        $this->bookingId = $bookingId;
    }

    // Getters
    public function getTicketId() {
        return $this->ticketId;
    }

    public function getQrCode() {
        return $this->qrCode;
    }

    public function getSeatNumber() {
        return $this->seatNumber;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getBookingId() {
        return $this->bookingId;
    }

    // Setters
    public function setStatus($status) {
        $this->status = $status;
    }

    // Private helper method to simulate QR code generation
    private function generateQRCode() {
        return hash('sha256', uniqid() . rand());
    }

    // Save ticket to database
    public function generateTicket($pdo) {
        $sql = "INSERT INTO tickets (ticketId, qrCode, seatNumber, status, bookingId)
                VALUES (:ticketId, :qrCode, :seatNumber, :status, :bookingId)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':ticketId' => $this->ticketId,
            ':qrCode' => $this->qrCode,
            ':seatNumber' => $this->seatNumber,
            ':status' => $this->status,
            ':bookingId' => $this->bookingId
        ]);
    }

    // Validate a ticket by ID (simplified example)
    public function validateTicket($pdo) {
        $sql = "SELECT * FROM tickets WHERE ticketId = :ticketId AND status = 'active'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':ticketId' => $this->ticketId]);
        return $stmt->rowCount() > 0;
    }

    // Cancel a ticket
    public function cancelTicket($pdo) {
        $this->status = 'cancelled';
        $sql = "UPDATE tickets SET status = 'cancelled' WHERE ticketId = :ticketId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':ticketId' => $this->ticketId]);
    }
}
?>

