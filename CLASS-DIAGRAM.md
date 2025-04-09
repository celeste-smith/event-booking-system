# Class Diagram – Event Booking System

##Mermaid.js UML Class Diagram

```mermaid
classDiagram
    class User {
        +String userId
        +String name
        +String email
        +String password
        +String role
        +register()
        +login()
        +updateProfile()
        +viewBookings()
    }

    class Event {
        +String eventId
        +String title
        +String description
        +Date date
        +Time time
        +String location
        +int capacity
        +String status
        +createEvent()
        +updateEvent()
        +cancelEvent()
        +isAvailable()
    }

    class Booking {
        +String bookingId
        +Date bookingDate
        +String status
        +createBooking()
        +cancelBooking()
        +updateStatus()
    }

    class Payment {
        +String paymentId
        +float amount
        +Date paymentDate
        +String paymentMethod
        +String status
        +processPayment()
        +refund()
    }

    class Notification {
        +String notificationId
        +String message
        +Date sentDate
        +Boolean readStatus
        +sendNotification()
        +markAsRead()
    }

    class Venue {
        +String venueId
        +String name
        +String location
        +int capacity
        +addVenue()
        +updateVenue()
        +removeVenue()
    }

    class Ticket {
        +String ticketId
        +String qrCode
        +String seatNumber
        +String status
        +generateTicket()
        +validateTicket()
        +cancelTicket()
    }

    %% Relationships and Multiplicities
    User "1" --> "0..*" Booking : makes
    Booking "1" --> "1" Event : for
    Booking "1" --> "1" Payment : includes
    Booking "1" --> "1" Ticket : generates
    Event "1" --> "1" Venue : held at
    User "1" --> "0..*" Notification : receives
    Admin <|-- User : inheritance

```

## 1. Entity Identification & Separation of Concerns
The core classes (User, Event, Booking, Payment, Ticket, Venue, Notification) were derived from prior work (requirements, use cases, and diagrams). Each class has specific responsibilities to keep the system modular, maintainable, and testable.

## 2. User Management & Role Differentiation
A single User class handles registration and login. Role-specific logic (e.g., Admin) is handled through inheritance for role-based access control.

## 3. Booking Lifecycle Logic
Booking ties the user, event, ticket, and payment to reflect real-world flow and ensure transaction traceability.

## 4. Ticket and Notification Decoupling
Ticket and Notification are decoupled from Event and Booking, allowing them to evolve independently. Notifications can be sent for multiple actions.

## 5. Relationships & Multiplicity
- One User can have many Bookings (1..*).
- A Booking is for one Event, has one Payment, and generates one Ticket.
- An Event is always at a Venue.
These relationships ensure business logic integrity, such as no orphaned bookings.

## 6. System Flexibility & Scalability
The design supports future scalability, such as adding multiple event types or supporting multi-venue events, without major refactoring.

## 7. Traceability to Prior Assignments
Each class and relationship maps directly to functional requirements (Assignment 4), use cases/user stories (Assignments 5 & 6), and activity/state models (Assignment 8).


