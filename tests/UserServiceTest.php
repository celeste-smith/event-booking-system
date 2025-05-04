<?php
use PHPUnit\Framework\TestCase;
use Services\UserService;
use Repositories\UserRepository;
use Models\User;

class UserServiceTest extends TestCase {
    public function testCreateUserSuccess() {
        $repo = $this->createMock(UserRepository::class);
        $user = new User("u123", "John Doe", "john@example.com");
        $repo->expects($this->once())->method('save')->with($user)->willReturn($user);

        $service = new UserService($repo);
        $result = $service->createUser($user);

        $this->assertEquals($user, $result);
    }
}
