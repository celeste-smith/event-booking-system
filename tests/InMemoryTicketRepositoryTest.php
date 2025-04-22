<?php
// File: tests/InMemoryTicketRepositoryTest.php

use PHPUnit\Framework\TestCase;
use EventBookingSystem\Repositories\InMemory\InMemoryTicketRepository;
use EventBookingSystem\Entities\Ticket;

class InMemoryTicketRepositoryTest extends TestCase
{
    private $repository;

    protected function setUp(): void
    {
        $this->repository = new InMemoryTicketRepository();
   
::contentReference[oaicite:0]{index=0}

