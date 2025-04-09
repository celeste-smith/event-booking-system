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
