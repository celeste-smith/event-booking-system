# Activity Workflow Modeling

This document contains **UML activity diagrams** for eight key workflows in the system, along with explanations of their process flows, decisions, and parallel actions.

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
- Ensures user inputs are validated before account creation.
- Sends a confirmation email upon successful registration.
- Addresses stakeholder concerns about security and usability.

---

## 2. Booking an Event Ticket

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
- Ensures smooth booking flow.
- Users must confirm details before payment.
- Automated email reduces manual work.

---

## 3. Payment Processing

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
- Ensures security and validation before processing payments.
- Directly aligns with user concerns about failed transactions.

---

## 4. Sending Booking Confirmation

```mermaid
graph TD
    A(Start) --> B[Confirm Payment]
    B --> C[Generate Booking ID]
    C --> D[Send Confirmation Email]
    D --> E(End)
```

### Explanation
- Ensures customers receive instant booking confirmation.
- Automated emails prevent manual errors.

---

## 5. Managing Event Details (Create/Edit)

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
- Ensures event details are accurate before saving.
- Admins can edit details if needed.

---

## 6. Handling Cancellations and Refunds

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
- Ensures cancellations follow business rules.
- Refund processing reduces user complaints.

---

## 7. Viewing Ticket Sales Reports

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
- Ensures admin access to critical sales data.
- Helps event organizers make data-driven decisions.

---

## 8. Monitoring System Uptime

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
- Ensures real-time monitoring of system performance.
- Alerts admins to downtime issues immediately.

---
