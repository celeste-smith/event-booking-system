<?php

class DatabaseConnection {
    private static ?DatabaseConnection $instance = null;
    private PDO $connection;

    private function __construct() {
        try {
            $this->connection = new PDO("mysql:host=localhost;dbname=eventhub", "root", "");
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance(): DatabaseConnection {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    public function getConnection(): PDO {
        return $this->connection;
    }

    // Prevent cloning and unserializing
    private function __clone() {}
    private function __wakeup() {}
}
