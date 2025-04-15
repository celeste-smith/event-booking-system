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

    public function createEvent() {}
    public function updateEvent() {}
    public function cancelEvent() {}
    public function isAvailable() {}
}

class Venue {
    private $venueId;
    private $name;
    private $location;
    private $capacity;

    public function addVenue() {}
    public function updateVenue() {}
    public function removeVenue() {}
}
?>

