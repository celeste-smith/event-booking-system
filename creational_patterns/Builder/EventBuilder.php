<?php

require_once "Event.php";

class EventBuilder {
    private string $name;
    private string $date;
    private string $time;
    private ?string $description = null;
    private ?int $capacity = null;
    private ?string $venue = null;

    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    public function setDate(string $date): self {
        $this->date = $date;
        return $this;
    }

    public function setTime(string $time): self {
        $this->time = $time;
        return $this;
    }

    public function setDescription(string $description): self {
        $this->description = $description;
        return $this;
    }

    public function setCapacity(int $capacity): self {
        $this->capacity = $capacity;
        return $this;
    }

    public function setVenue(string $venue): self {
        $this->venue = $venue;
        return $this;
    }

    public function build(): Event {
        return new Event(
            $this->name,
            $this->date,
            $this->time,
            $this->description,
            $this->capacity,
            $this->venue
        );
    }
}
