<?php

use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCreateUser()
    {
        $user = UserFactory::createUser('customer', 'John Doe', 'john@example.com');
        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('John Doe', $user->getName());
        $this->assertEquals('john@example.com', $user->getEmail());
    }

    public function testCreateCustomer()
    {
        $customer = UserFactory::createUser('customer', 'Jane Doe', 'jane@example.com');
        $this->assertInstanceOf(Customer::class, $customer);
        $this->assertEquals('Jane Doe', $customer->getName());
        $this->assertEquals('jane@example.com', $customer->getEmail());
    }
}
