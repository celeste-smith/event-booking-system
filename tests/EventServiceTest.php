<?php
use PHPUnit\Framework\TestCase;
use Services\EventService;
use Repositories\EventRepository;
use Models\Event;

class EventServiceTest extends TestCase {
    public function testCreateEventSuccess() {
        $repo = $this->createMock(EventRepository::class);
        $event = new Event("e123", "Tech Conference", "2025-08-01", "Cape Town");
        $repo->expects($this->once())->method('save')->with($event)->willReturn($event);

        $service = new EventService($repo);
        $result = $service->createEvent($event);

        $this->assertEquals($event, $result);
    }
}
