# Use Case Modeling for Event Booking System (EventHub)

## Use Case Diagram
```mermaid
graph TD;
    A[Event User] -->|Search| B[Search Events];
    A -->|Register| C[Create Account];
    A -->|Book| D[Book Event];
    A -->|View| E[View Booking Details];
    A -->|Cancel| F[Cancel Booking];
    
    G[Event Organiser] -->|Create| H[Create Event];
    G -->|Edit| I[Edit Event];
    G -->|Manage| J[Manage Bookings];
    
    K[Admin] -->|Approve| L[Approve Events];
    K -->|Monitor| M[Monitor System];
    K -->|Handle| N[Manage Users];

    %% Styling
    style A fill:#FFDD57,stroke:#E6B800,stroke-width:2px,font-size:14px;
    style G fill:#FF9F68,stroke:#E67E22,stroke-width:2px,font-size:14px;
    style K fill:#6EB5FF,stroke:#3498DB,stroke-width:2px,font-size:14px;

    style B fill:#F7DC6F,stroke:#E6B800;
    style C fill:#F7DC6F,stroke:#E6B800;
    style D fill:#F7DC6F,stroke:#E6B800;
    style E fill:#F7DC6F,stroke:#E6B800;
    style F fill:#F7DC6F,stroke:#E6B800;

    style H fill:#FFA07A,stroke:#E67E22;
    style I fill:#FFA07A,stroke:#E67E22;
    style J fill:#FFA07A,stroke:#E67E22;

    style L fill:#85C1E9,stroke:#3498DB;
    style M fill:#85C1E9,stroke:#3498DB;
    style N fill:#85C1E9,stroke:#3498DB;
```


## Explanation of Key Actors and Use Cases

### Actors:
1. **Event User** - This is a customer who searches, books, views, and cancels events.
2. **Event Organiser** - This is a person or organisation responsible for creating, editing, and managing event bookings.
3. **Admin** - This would be a system administrator responsible for approving events, monitoring the system, and managing users.

### Relationships Between Actors and Use Cases:
- **Generalisation:** An administrator can also manage users and has more rights than an event organiser.
- **Inclusion:** "Manage Bookings" includes both "Approve Events" and "Monitor System."
- **Extension:** "Cancel Booking" extends "View Booking Details" since users can only cancel after viewing their bookings.

### Addressing Stakeholder Concerns:
- **Users:** Reduces manual labour by enabling smooth event booking and searching
- **Event Organisers:** Allows for improved event management and customer engagement.
- **Admins:** Ensures system control, security, and proper event approval.
