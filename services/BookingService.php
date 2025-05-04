<?php

namespace Services;

use Repositories\BookingRepository;
use Repositories\EventRepository;
use Repositories\UserRepository;
use Models\Booking;

class BookingService
{
    private BookingRepository $bookingRepo;
    private EventRepository $eventRepo;
    private UserRepository $userRepo;

    public function __construct(
        BookingRepository $bookingRepo,
        EventRepository $eventRepo,
        UserRepository $userRepo
    ) {
        $this->bookingRepo = $bookingRepo;
        $this->eventRepo = $eventRepo;
        $this->userRepo = $userRepo;
    }

    public function bookEvent(string $userId, string $eventId, int $tickets): Booking
    {
        $user = $this->userRepo->findById($userId);
        $event = $this->eventRepo->findById($eventId);

        if (!$user || !$event) {
            throw new \Exception("User or Event not found.");
        }

        if ($event->getAvailableTickets() < $tickets) {
            throw new \Exception("Not enough tickets available.");
        }

        // Reduce ticket count
        $event->setAvailableTickets($event->getAvailableTickets() - $tickets);
        $this->eventRepo->save($event);

        $booking = new Booking($userId, $eventId, $tickets);
        return $this->bookingRepo->save($booking);
    }
}

