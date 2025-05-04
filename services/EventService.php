<?php

namespace Services;

use Repositories\EventRepository;
use Models\Event;

class EventService
{
    private EventRepository $eventRepo;

    public function __construct(EventRepository $eventRepo)
    {
        $this->eventRepo = $eventRepo;
    }

    public function createEvent(array $data): Event
    {
        if (empty($data['title']) || empty($data['date']) || empty($data['availableTickets'])) {
            throw new \InvalidArgumentException("Title, date and ticket count required.");
        }

        $event = new Event($data['title'], $data['date'], (int)$data['availableTickets']);
        return $this->eventRepo->save($event);
    }

    public function getAllEvents(): array
    {
        return $this->eventRepo->findAll();
    }

    public function getEventById(string $eventId): ?Event
    {
        return $this->eventRepo->findById($eventId);
    }
}

