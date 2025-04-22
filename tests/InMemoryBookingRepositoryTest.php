<?php
// File: tests/InMemoryBookingRepositoryTest.php

use PHPUnit\Framework\TestCase;
use EventBookingSystem\Repositories\InMemory\InMemoryBookingRepository;
use EventBookingSystem\Entities\Booking;

class InMemoryBookingRepositoryTest extends TestCase
{
    private $repository;

    protected function setUp(): void
    {
        $this->repository = new InMemoryBookingRepository();
    }

    public function testCreateAndRead()
    {
        $booking = new Booking('1', 'user1', 'event1');
        $this->repository->create($booking);
        $retrieved = $this->repository->read('1');
        $this->assertSame($booking, $retrieved);
    }

    public function testUpdate()
    {
        $booking = new Booking('1', 'user1', 'event1');
        $this->repository->create($booking);
        $booking->setEventId('event2');
        $this->repository->update($booking);
        $retrieved = $this->repository->read('1');
        $this->assertEquals('event2', $retrieved->getEventId());
    }

    public function testDelete()
    {
        $booking = new Booking('1', 'user1', 'event1');
        $this->repository->create($booking);
        $this->repository->delete($booking);
        $retrieved = $this->repository->read('1');
        $this->assertNull($retrieved);
    }

    public function testGetAll()
    {
        $booking1 = new Booking('1', 'user1', 'event1');
        $booking2 = new Booking('2', 'user2', 'event2');
        $this->repository->create($booking1);
        $this->repository->create($booking2);
        $allBookings = $this->repository->getAll();
        $this->assertCount(2, $allBookings);
        $this->assertContains($booking1, $allBookings);
        $this->assertContains($booking2, $allBookings);
    }
}

