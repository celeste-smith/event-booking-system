<?php

use PHPUnit\Framework\TestCase;

class BuilderTest extends TestCase
{
    public function testBuildEvent()
    {
        $builder = new EventBuilder();
        $event = $builder->addTitle('Music Concert')->addDate('2022-10-01')->addLocation('Stadium')->build();

        $this->assertInstanceOf(Event::class, $event);
        $this->assertEquals('Music Concert', $event->getTitle());
        $this->assertEquals('2022-10-01', $event->getDate());
        $this->assertEquals('Stadium', $event->getLocation());
    }

    public function testBuildEventWithCustomBehavior()
    {
        $builder = new EventBuilder();
        $event = $builder->addTitle('Custom Event')->addDate('2022-12-15')->addLocation('Custom Venue')->build();

        $this->assertInstanceOf(Event::class, $event);
        $this->assertEquals('Custom Event', $event->getTitle());
        $this->assertEquals('2022-12-15', $event->getDate());
        $this->assertEquals('Custom Venue', $event->getLocation());
    }
}
