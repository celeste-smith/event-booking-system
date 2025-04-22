<?php
// File: tests/InMemoryNotificationRepositoryTest.php

use PHPUnit\Framework\TestCase;
use EventBookingSystem\Repositories\InMemory\InMemoryNotificationRepository;
use EventBookingSystem\Entities\Notification;

class InMemoryNotificationRepositoryTest extends TestCase
{
    private $repository;

    protected function setUp(): void
    {
        $this->repository = new InMemoryNotificationRepository();
    }

    public function testCreateAndRead()
    {
        $notification = new Notification('1', 'user1', 'Your booking is confirmed.');
        $this->repository->create($notification);
        $retrieved = $this->repository->read('1');
        $this->assertSame($notification, $retrieved);
    }

    public function testUpdate()
    {
        $notification = new Notification('1', 'user1', 'Your booking is confirmed.');
        $this->repository->create($notification);
        $notification->setMessage('Your booking has been updated.');
        $this->repository->update($notification);
        $retrieved = $this->repository->read('1');
        $this->assertEquals('Your booking has been updated.', $retrieved->getMessage());
    }

    public function testDelete()
    {
        $notification = new Notification('1', 'user1', 'Your booking is confirmed.');
        $this->repository->create($notification);
        $this->repository->delete($notification);
        $retrieved = $this->repository->read('1');
        $this->assertNull($retrieved);
    }

    public function testGetAll()
    {
        $notification1 = new Notification('1', 'user1', 'Message 1');
        $notification2 = new Notification('2', 'user2', 'Message 2');
        $this->repository->create($notification1);
        $this->repository->create($notification2);
        $allNotifications = $this->repository->getAll();
        $this->assertCount(2, $allNotifications);
        $this->assertContains($notification1, $allNotifications);
        $this->assertContains($notification2, $allNotifications);
    }
}

