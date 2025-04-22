<?php
// File: tests/InMemoryVenueRepositoryTest.php

use PHPUnit\Framework\TestCase;
use EventBookingSystem\Repositories\InMemory\InMemoryVenueRepository;
use EventBookingSystem\Entities\Venue;

class InMemoryVenueRepositoryTest extends TestCase
{
    private $repository;

    protected function setUp(): void
    {
        $this->repository = new InMemoryVenueRepository();
    }

    public function testCreateAndRead()
    {
        $venue = new Venue('1', 'Grand Hall', '123 Main St');
        $this->repository->create($venue);
        $retrieved = $this->repository->read('1');
        $this->assertSame($venue, $retrieved);
    }

    public function testUpdate()
    {
        $venue = new Venue('1', 'Grand Hall', '123 Main St');
        $this->repository->create($venue);
        $venue->setAddress('456 Elm St');
        $this->repository->update($venue);
        $retrieved = $this->repository->read('1');
        $this->assertEquals('456 Elm St', $retrieved->getAddress());
    }

    public function testDelete()
    {
        $venue = new Venue('1', 'Grand Hall', '123 Main St');
        $this->repository->create($venue);
        $this->repository->delete($venue);
        $retrieved = $this->repository->read('1');
        $this->assertNull($retrieved);
    }

    public function testGetAll()
    {
        $venue1 = new Venue('1', 'Grand Hall', '123 Main St');
        $venue2 = new Venue('2', 'Conference Center', '456 Elm St');
        $this->repository->create($venue1);
        $this->repository->create($venue2);
        $allVenues = $this->repository->getAll();
        $this->assertCount(2, $allVenues);
        $this->assertContains($venue1, $allVenues);
        $this->assertContains($venue2, $allVenues);
    }
}

