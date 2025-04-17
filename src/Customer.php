<?php

require_once 'User.php';

class Customer extends User
{
    private $customerId;

    public function __construct($id, $username, $email, $password)
    {
        parent::__construct($id, $username, $email, $password);
        $this->customerId = $id;
    }

    // Getter for Customer ID
    public function getCustomerId()
    {
        return $this->customerId;
    }

    // Function to browse available events
    public function browseEvents()
    {
        // Placeholder logic for browsing events
        echo "Customer '{$this->getUsername()}' is browsing events...\n";
    }

    // Function to book an event
    public function bookEvent($eventId)
    {
        // Placeholder logic for booking
        echo "Customer '{$this->getUsername()}' booked event with ID: {$eventId}\n";
    }

    // Function to view their tickets
    public function viewTickets()
    {
        // Placeholder logic for viewing tickets
        echo "Customer '{$this->getUsername()}' is viewing their tickets...\n";
    }
}
