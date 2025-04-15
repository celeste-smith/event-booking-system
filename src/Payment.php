<?php

class Payment {
    private $paymentId;
    private $amount;
    private $paymentDate;
    private $paymentMethod;
    private $status;

    private $bookingId;

    public function __construct($amount, $paymentMethod, $bookingId, $status = 'pending') {
        $this->paymentId = uniqid('pay_');
        $this->amount = $amount;
        $this->paymentDate = date("Y-m-d");
        $this->paymentMethod = $paymentMethod;
        $this->status = $status;
        $this->bookingId = $bookingId;
    }

    // Getters
    public function getPaymentId() {
        return $this->paymentId;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getPaymentDate() {
        return $this->paymentDate;
    }

    public function getPaymentMethod() {
        return $this->paymentMethod;
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

    // Methods

    // Save payment to database
    public function processPayment($pdo) {
        $sql = "INSERT INTO payments (paymentId, amount, paymentDate, paymentMethod, status, bookingId)
                VALUES (:paymentId, :amount, :paymentDate, :paymentMethod, :status, :bookingId)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':paymentId' => $this->paymentId,
            ':amount' => $this->amount,
            ':paymentDate' => $this->paymentDate,
            ':paymentMethod' => $this->paymentMethod,
            ':status' => $this->status,
            ':bookingId' => $this->bookingId
        ]);
    }

    // Refund the payment
    public function refund($pdo) {
        $this->status = 'refunded';
        $sql = "UPDATE payments SET status = 'refunded' WHERE paymentId = :paymentId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':paymentId' => $this->paymentId]);
    }
}
?>

