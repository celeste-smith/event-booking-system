# Activity Workflow Modeling

This document contains **UML activity diagrams** for key workflows in the system, along with explanations of their process flows, decisions, and parallel actions.

## 1. User Registration

```mermaid
graph TD
    A(Start) --> B[User Enters Registration Details]
    B --> C[Validate Inputs]
    C -->|Valid| D[Create User Account]
    C -->|Invalid| E[Show Error Message]
    D --> F[Send Confirmation Email]
    F --> G(End)
```

### Explanation
- **Key States & Transitions**: The process starts with user input validation, followed by account creation and email confirmation.
- **Stakeholder Concerns**: Ensures secure and error-free user registrations while preventing invalid data from entering the system.

---

## 2. Search for Events

```mermaid
graph TD;
  Start -->|User enters search query| CheckDatabase;
  CheckDatabase -->|Results found?| ShowResults{Results?};
  ShowResults -- Yes --> DisplayEvents;
  ShowResults -- No --> ShowNoResults;
  DisplayEvents --> End;
```

### Explanation
- **Key States & Transitions**: Searches the database and displays events if found; otherwise, an error is shown.
- **Stakeholder Concerns**: Improves user experience by ensuring a fast and efficient search mechanism.

---

## 3. Booking an Event Ticket

```mermaid
graph TD
    A(Start) --> B[User Selects Event]
    B --> C[Choose Ticket Type & Quantity]
    C --> D[Proceed to Payment]
    D --> E[Confirm Booking]
    E --> F[Send Ticket Email]
    F --> G(End)
```

### Explanation
- **Key States & Transitions**: The user selects an event, chooses tickets, proceeds to payment, and receives confirmation.
- **Stakeholder Concerns**: Ensures seamless booking and reduces errors in ticketing.

---

## 4. Payment Processing

```mermaid
graph TD
    A(Start) --> B[User Enters Payment Details]
    B --> C[Validate Payment Info]
    C -->|Valid| D[Process Payment]
    C -->|Invalid| E[Show Payment Error]
    D --> F[Send Payment Confirmation]
    F --> G(End)
```

### Explanation
- **Key States & Transitions**: Payment details are validated before processing; errors prompt users for corrections.
- **Stakeholder Concerns**: Prevents failed transactions and ensures secure payments.

---

## 5. Sending Booking Confirmation

```mermaid
graph TD
    A(Start) --> B[Confirm Payment]
    B --> C[Generate Booking ID]
    C --> D[Send Confirmation Email]
    D --> E(End)
```

### Explanation
- **Key States & Transitions**: After successful payment, a booking ID is generated, and a confirmation email is sent.
- **Stakeholder Concerns**: Ensures immediate feedback and avoids booking confusion.

---

## 6. Managing Event Details (Create/Edit)

```mermaid
graph TD
    A(Start) --> B[Admin Logs In]
    B --> C[Create/Edit Event Details]
    C --> D[Validate Data]
    D -->|Valid| E[Save Event]
    D -->|Invalid| F[Show Error Message]
    E --> G(End)
```

### Explanation
- **Key States & Transitions**: Admins can create/edit events, ensuring valid data before saving.
- **Stakeholder Concerns**: Provides flexibility and prevents invalid event details from being saved.

---

## 7. Handling Cancellations and Refunds

```mermaid
graph TD
    A(Start) --> B[User Requests Cancellation]
    B --> C[Verify Refund Eligibility]
    C -->|Eligible| D[Process Refund]
    C -->|Not Eligible| E[Notify User]
    D --> F[Send Refund Confirmation]
    F --> G(End)
```

### Explanation
- **Key States & Transitions**: The system checks refund eligibility before processing or notifying the user.
- **Stakeholder Concerns**: Ensures refunds follow event policies, reducing user complaints.

---

## 8. Manage User Accounts

```mermaid
graph TD;
  Start -->|Admin selects user| ChooseAction;
  ChooseAction -->|Update details?| UpdateAccount;
  ChooseAction -->|Deactivate account?| DeactivateUser;
  UpdateAccount --> End;
  DeactivateUser --> End;
```

### Explanation
- **Key States & Transitions**: Admins can update user details or deactivate accounts.
- **Stakeholder Concerns**: Enhances user management and security within the system.

---

## 9. Viewing Ticket Sales Reports

```mermaid
graph TD
    A(Start) --> B[Admin Logs In]
    B --> C[Select Report Type]
    C --> D[Fetch Data from Database]
    D --> E[Generate Report]
    E --> F[Display Report to Admin]
    F --> G(End)
```

### Explanation
- **Key States & Transitions**: Admins log in, fetch ticket sales data, and generate reports.
- **Stakeholder Concerns**: Provides event organizers with critical sales insights for decision-making.

---

## 10. Monitoring System Uptime

```mermaid
graph TD
    A(Start) --> B[System Health Check]
    B --> C[Monitor Server Status]
    C -->|Server Down| D[Trigger Alert]
    C -->|Server Up| E[Continue Monitoring]
    D --> F[Send Alert to Admin]
    F --> G(End)
```

### Explanation
- **Key States & Transitions**: The system continuously monitors uptime and alerts admins if downtime occurs.
- **Stakeholder Concerns**: Ensures real-time system reliability and performance monitoring.
