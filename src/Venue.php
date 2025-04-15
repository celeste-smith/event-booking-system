<?php

class Venue {
    private $venueId;
    private $name;
    private $location;
    private $capacity;

    public function __construct($name, $location, $capacity) {
        $this->venueId = uniqid('venue_');
        $this->name = $name;
        $this->location = $location;
        $this->capacity = $capacity;
    }

    // Getters
    public function getVenueId() {
        return $this->venueId;
    }

    public function getName() {
        return $this->name;
    }

    public function getLocation() {
        return $this->location;
    }

    public function getCapacity() {
        return $this->capacity;
    }

    // Setters
    public function setName($name) {
        $this->name = $name;
    }

    public function setLocation($location) {
        $this->location = $location;
    }

    public function setCapacity($capacity) {
        $this->capacity = $capacity;
    }

    // Add venue to the database
    public function addVenue($pdo) {
        $sql = "INSERT INTO venues (venueId, name, location, capacity)
                VALUES (:venueId, :name, :location, :capacity)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':venueId' => $this->venueId,
            ':name' => $this->name,
            ':location' => $this->location,
            ':capacity' => $this->capacity
        ]);
    }

    // Update venue details
    public function updateVenue($pdo) {
        $sql = "UPDATE venues SET name = :name, location = :location, capacity = :capacity
                WHERE venueId = :venueId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':venueId' => $this->venueId,
            ':name' => $this->name,
            ':location' => $this->location,
            ':capacity' => $this->capacity
        ]);
    }

    // Remove venue from the database
    public function removeVenue($pdo) {
        $sql = "DELETE FROM venues WHERE venueId = :venueId";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':venueId' => $this->venueId]);
    }
}
?>

