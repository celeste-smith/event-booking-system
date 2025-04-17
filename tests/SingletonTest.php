<?php

use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testDatabaseConnectionSingleton()
    {
        $connection1 = DatabaseConnection::getInstance();
        $connection2 = DatabaseConnection::getInstance();

        $this->assertSame($connection1, $connection2); // Both instances should be the same.
    }
}
