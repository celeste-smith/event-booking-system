<?php

use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCloneConcertEvent()
    {
        $concert = new ConcertEvent('Rock Concert', '2022-11-12', 'Arena');
        $clonedConcert = clone $concert;

        $this->assertInstanceOf(ConcertEvent::class, $clonedConcert);
        $this->assertEquals($concert->getTitle(), $clonedConcert->getTitle());
        $this->assertEquals($concert->getDate(), $clonedConcert->getDate());
        $this->assertEquals($concert->getLocation(), $clonedConcert->getLocation());
    }
}
