<?php
// File: tests/InMemoryEventRepositoryTest.php

use PHPUnit\Framework\TestCase;
use EventBookingSystem\Repositories\InMemory\InMemoryEventRepository;
use EventBookingSystem\Entities\Event;

class InMemoryEventRepositoryTest extends TestCase
{
    private $repository;

    protected function setUp(): void
    {
        $this->repository = new InMemoryEventRepository();
    }

    public function testCreateAndRead()
    {
        $event = new Event('1', 'Music Concert');
        $this->repository->create($event);
        $retrieved = $this->repository->read('1');
        $this->assertSame($event, $retrieved);
    }

    public function testUpdate()
    {
        $event = new Event('1', 'Music Concert');
        $this->repository->create($event);
        $event->setName('Jazz Concert');
        $this->repository->update($event);
        $retrieved = $this->repository->read('1');
        $this->assertEquals('Jazz Concert', $retrieved->getName());
    }

    public function testDelete()
    {
        $event = new Event('1', 'Music Concert');
        $this->repository->create($event);
        $this->repository->delete($event);
        $retrieved = $this->repository->read('1');
        $this->assertNull($retrieved);
    }

    public function testGetAll()
    {
        $event1 = new Event('1', 'Music Concert');
        $event2 = new Event('2', 'Art Exhibition');
        $this->repository->create($event1);
        $this->repository->create($event2);
        $allEvents = $this->repository->getAll();
        $this->assertCount(2, $allEvents);
        $this->assertContains($event1, $allEvents);
        $this->assertContains($event2, $allEvents);
    }
}
