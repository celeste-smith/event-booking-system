<?php

require_once "EventBuilder.php";

class EventDirector {
    public function createBasicEvent(string $name, string $date, string $time): Event {
        return (new EventBuilder())
            ->setName($name)
            ->setDate($date)
            ->setTime($time)
            ->build();
    }

    public function createFullEvent(): Event {
        return (new EventBuilder())
            ->setName("Music Concert")
            ->setDate("2025-12-01")
            ->setTime("19:00")
            ->setDescription("An amazing live performance.")
            ->setCapacity(500)
            ->setVenue("Cape Town Stadium")
            ->build();
    }
}
