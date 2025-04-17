<?php

require_once "EventPrototype.php";

class ConcertEvent extends EventPrototype {
    private string $artist;
    private array $attendees;

    public function __construct() {
        $this->name = "Live Concert";
        $this->date = "2025-12-01";
        $this->venue = "Cape Town Stadium";
        $this->artist = "Default Artist";
        $this->attendees = [];
    }

    public function setArtist(string $artist): void {
        $this->artist = $artist;
    }

    public function addAttendee(string $attendee): void {
        $this->attendees[] = $attendee;
    }

    public function getDetails(): string {
        $attendeeCount = count($this->attendees);
        return "Event: {$this->name}, Date: {$this->date}, Venue: {$this->venue}, Artist: {$this->artist}, Attendees: {$attendeeCount}";
    }

    public function __clone() {
        // Reset attendees for the cloned event (new event, fresh attendance)
        $this->attendees = [];

        // Optionally, update the artist name to indicate it’s a clone
        $this->artist .= " (Special Edition)";
    }
}
