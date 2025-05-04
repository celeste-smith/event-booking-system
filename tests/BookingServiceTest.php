<?php
use PHPUnit\Framework\TestCase;
use Services\BookingService;
use Repositories\BookingRepository;
use Repositories\UserRepository;
use Repositories\EventRepository;
use Models\Booking;
use Models\User;
use Models\Event;

class BookingServiceTest extends TestCase {
    public function testBookEventSuccess() {
        $userRepo = $this->createMock(UserRepository::class);
        $eventRepo = $this->createMock(EventRepository::class);
        $bookingRepo = $this->createMock(BookingRepository::class);

        $user = new User("u123", "Alice", "alice@example.com");
        $event = new Event("e123", "Music Fest", "2025-09-01", "Johannesburg");
        $booking = new Booking("b123", "u123", "e123", 2);

        $userRepo->method('findById')->with("u123")->willReturn($user);
        $eventRepo->method('findById')->with("e123")->willReturn($event);
        $bookingRepo->expects($this->once())->method('save')->with($booking)->willReturn($booking);

        $service = new BookingService($bookingRepo, $userRepo, $eventRepo);
        $result = $service->bookEvent($booking);

        $this->assertEquals($booking, $result);
    }
}
