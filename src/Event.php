<?php

class Event {
    private $eventId;
    private $title;
    private $description;
    private $date;
    private $time;
    private $location;
    private $capacity;
    private $status;

    // Constructor
    public function __construct($title, $description, $date, $time, $location, $capacity, $status = "active") {
        $this->eventId = uniqid('event_');
        $this->title = $title;
        $this->description = $description;
        $this->date = $date;
        $this->time = $time;
        $this->location = $location;
        $this->capacity = $capacity;
        $this->status = $status;
    }

    // Getters
    public function getEventId() {
        return $this->eventId;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDate() {
        return $this->date;
    }

    public function getTime() {
        return $this->time;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getCapacity() {
        return $this->capacity;
    }

    public function getStatus() {
        return $this->status;
    }

    // Setters
    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setDate($date) {
        $this->date = $date;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function setCapacity($capacity) {
        $this->capacity = $capacity;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    // Methods

    // Save the event to DB
    public function createEvent($pdo) {
        $sql = "INSERT INTO events (eventId, title, description, date, time, location, capacity, status)
                VALUES (:eventId, :title, :description, :date, :time, :location, :capacity, :status)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':eventId' => $this->eventId,
            ':title' => $this->title,
            ':description' => $this->description,
            ':date' => $this->date,
            ':time' => $this->time,
            ':location' => $this->location,
            ':capacity' => $this->capacity,
            ':status' => $this->status
        ]);
    }

    // Update event info in DB
    public function updateEvent($pdo) {
        $sql = "UPDATE events SET title = :title, description = :description, date = :date,
                time = :time, location = :location, capacity = :capacity, status = :status
                WHERE eventId = :eventId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':title' => $this->title,
            ':description' => $this->description,
            ':date' => $this->date,
            ':time' => $this->time,
            ':location' => $this->location,
            ':capacity' => $this->capacity,
            ':status' => $this->status,
            ':eventId' => $this->eventId
        ]);
    }

    // Cancel event
    public function cancelEvent($pdo) {
        $this->status = 'cancelled';
        $sql = "UPDATE events SET status = 'cancelled' WHERE eventId = :eventId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':eventId' => $this->eventId]);
    }

    // Check availability
    public function isAvailable() {
        return $this->status === 'active' && $this->capacity > 0;
    }
}
?>
