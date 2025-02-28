# C4 Architectural Diagrams

### Project Title
**Event Booking System (named Event Hub)**

### Domain
**Event Management**
The system operates within the **event management** domain, facilitating the organization and booking of events. It provides an online platform where users can browse events, book tickets, and manage reservations, while event organisers can create and manage event listings efficiently.

### Problem Statement
Traditional event booking methods often involve manual processes, leading to inefficiencies such as overbooking and poor reservation tracking, The **Event Booking System – Event Hub** aims to provide a centralised, automated solution that enhances the booking experience for attendees and streamlines management for event organisers.

### Individual Scope
The **Event Booking System – Event Hub** is a feasible project due to the following justifications:
- **Modular Design**: The system can be divided into key components like user authentication, event management, and payment processing.
- **Scalability**: Designed to accommodate a growing number of users and events without performance degradation.
- **Efficiency**: Reduces manual errors and enhances the booking process through automation.
- **Technology Readiness**: Can be implemented using widely available web technologies such as MySQL.
- **Market Demand**: Digital solutions for event management are increasingly popular, making this system relevant and valuable.


### C4 Model Overview
The C4 model consists of four levels of abstraction:
1. **Context Diagram** – Provides an overview of the system and its interactions with users and external systems.
2. **Container Diagram** – Breaks down the system into major containers (e.g., web application, database, external services).
3. **Component Diagram** – Presents internal components within containers, such as authentication service, booking service, and notification system.
4. **Code Diagram** – (Optional) Represents the structure of the codebase at a class/module level.

# C4 Diagrams for Event Booking System

## 1. Context Diagram (C4 Level 1)

```mermaid
graph TD;
    %% Define styles
    classDef userStyle fill:#ffcc00,stroke:#b0c4de,stroke-width:2px;
    classDef systemStyle fill:#009688,stroke:#00796B,stroke-width:2px,color:white;
    classDef serviceStyle fill:#607D8B,stroke:#455A64,stroke-width:2px,color:white;
    classDef dbStyle fill:#673AB7,stroke:#512DA8,stroke-width:2px,color:white;
    classDef externalStyle fill:#FF5722,stroke:#E64A19,stroke-width:2px,color:white;
    
    subgraph Users["Users"]
        Attendee["Attendee"]
        Organizer["Event Organizer"]
        Admin["Admin"]
    end
    
    subgraph EventBookingSystem["Event Booking System"]
        WebApp["Web Application"]
        API["Backend API"]
        DB[("Database")]
        PaymentGateway[["Payment Gateway"]]
        NotificationService[["Email/SMS Notifications"]]
    end
    
    %% Define relationships
    Attendee -- Books Events --> WebApp;
    Organizer -- Manages Events --> WebApp;
    Admin -- Oversees System --> WebApp;
    WebApp -- Sends Requests --> API;
    API -- Reads/Writes --> DB;
    API -- Processes Payments --> PaymentGateway;
    API -- Sends Notifications --> NotificationService;

    %% Apply styles
    class Attendee,Organizer,Admin userStyle;
    class WebApp,API systemStyle;
    class DB dbStyle;
    class PaymentGateway,NotificationService externalStyle;

```

## 2. Container Diagram (C4 Level 2)
```mermaid
graph TD;
    subgraph Web Application
        Frontend[React/Angular Web App]
    end
    
    subgraph Backend API
        AuthService[Authentication Service]
        EventService[Event Management Service]
        BookingService[Booking Management Service]
        PaymentService[Payment Processing Service]
        NotificationService[Email/SMS Notification Service]
    end
    
    subgraph Database
        UsersTable[(Users Table)]
        EventsTable[(Events Table)]
        BookingsTable[(Bookings Table)]
        PaymentsTable[(Payments Table)]
    end
    
    Frontend -- Calls --> AuthService;
    Frontend -- Calls --> EventService;
    Frontend -- Calls --> BookingService;
    Frontend -- Calls --> PaymentService;
    Frontend -- Calls --> NotificationService;
    
    AuthService -- Stores Data --> UsersTable;
    EventService -- Stores Data --> EventsTable;
    BookingService -- Stores Data --> BookingsTable;
    PaymentService -- Stores Data --> PaymentsTable;
    
    PaymentService -- Calls --> PaymentGateway[Payment Gateway];
    NotificationService -- Sends --> EmailSMS[Email/SMS Provider];
```

## 3. Component Diagram (C4 Level 3)
```mermaid
graph TD;
    subgraph Authentication Service
        LoginHandler[Login Handler]
        RegisterHandler[Register Handler]
        TokenValidator[Token Validator]
    end
    
    subgraph Event Management Service
        EventCreator[Create Event]
        EventUpdater[Update Event]
        EventLister[List Events]
    end
    
    subgraph Booking Management Service
        BookingCreator[Create Booking]
        BookingUpdater[Update Booking]
        BookingLister[List Bookings]
    end
    
    subgraph Payment Processing Service
        PaymentProcessor[Process Payments]
        RefundHandler[Handle Refunds]
    end
    
    LoginHandler -- Validates --> TokenValidator;
    RegisterHandler -- Creates --> UsersTable;
    EventCreator -- Stores --> EventsTable;
    BookingCreator -- Stores --> BookingsTable;
    PaymentProcessor -- Sends Requests --> PaymentGateway[Payment Gateway];
```

## 4. Code Diagram (C4 Level 4) 
```mermaid
classDiagram
    class User {
        +id: UUID
        +name: String
        +email: String
        +password: String
    }
    
    class Event {
        +id: UUID
        +title: String
        +date: Date
        +location: String
        +organiserId: UUID
    }
    
    class Booking {
        +id: UUID
        +userId: UUID
        +eventId: UUID
        +status: String
    }
    
    class Payment {
        +id: UUID
        +bookingId: UUID
        +amount: Float
        +status: String
    }
    
    User --> Booking : "makes"
    Booking --> Event : "reserves"
    Booking --> Payment : "triggers"
```
