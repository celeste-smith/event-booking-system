<?php
// File: tests/InMemoryUserRepositoryTest.php

use PHPUnit\Framework\TestCase;
use EventBookingSystem\Repositories\InMemory\InMemoryUserRepository;
use EventBookingSystem\Entities\User;

class InMemoryUserRepositoryTest extends TestCase
{
    private $repository;

    protected function setUp(): void
    {
        $this->repository = new InMemoryUserRepository();
    }

    public function testCreateAndRead()
    {
        $user = new User('1', 'Alice', 'alice@example.com');
        $this->repository->create($user);
        $retrieved = $this->repository->read('1');
        $this->assertSame($user, $retrieved);
    }

    public function testUpdate()
    {
        $user = new User('1', 'Alice', 'alice@example.com');
        $this->repository->create($user);
        $user->setEmail('alice.new@example.com');
        $this->repository->update($user);
        $retrieved = $this->repository->read('1');
        $this->assertEquals('alice.new@example.com', $retrieved->getEmail());
    }

    public function testDelete()
    {
        $user = new User('1', 'Alice', 'alice@example.com');
        $this->repository->create($user);
        $this->repository->delete($user);
        $retrieved = $this->repository->read('1');
        $this->assertNull($retrieved);
    }

    public function testGetAll()
    {
        $user1 = new User('1', 'Alice', 'alice@example.com');
        $user2 = new User('2', 'Bob', 'bob@example.com');
        $this->repository->create($user1);
        $this->repository->create($user2);
        $allUsers = $this->repository->getAll();
        $this->assertCount(2, $allUsers);
        $this->assertContains($user1, $allUsers);
        $this->assertContains($user2, $allUsers);
    }
}

