# Object State Modeling with State Transition Diagrams

## Overview
This document presents state transition diagrams for critical objects in the booking system. Each diagram highlights key states, transitions, and conditions that align with the system’s functional requirements.

## 1. **Booking Object**
```mermaid
graph TD;
    Created -->|Payment Received| Confirmed;
    Created -->|No Payment| Canceled;
    Confirmed -->|User Cancels| Canceled;
    Confirmed -->|Check-in Date Reached| Checked-In;
    Checked-In -->|User Completes Stay| Completed;
    Checked-In -->|User Cancels| Canceled;
```
### Explanation
- **Created**: The booking is made but not yet paid.
- **Confirmed**: Payment is received, and the booking is secured.
- **Checked-In**: The user arrives and checks in.
- **Completed**: The booking is successfully fulfilled.
- **Canceled**: If no payment is received or the user cancels.

## 2. **User Account Object**
```mermaid
graph TD;
    Registered -->|Email Verified| Active;
    Registered -->|No Verification| Suspended;
    Active -->|User Requests Deactivation| Deactivated;
    Active -->|Admin Suspends| Suspended;
    Suspended -->|User Appeals| Active;
    Deactivated -->|User Re-Registers| Registered;
```
### Explanation
- **Registered**: A new user signs up.
- **Active**: The user completes email verification.
- **Suspended**: The account is flagged for non-compliance.
- **Deactivated**: The user voluntarily disables their account.

## 3. **Payment Object**
```mermaid
graph TD;
    Initiated -->|User Confirms| Processing;
    Processing -->|Payment Successful| Completed;
    Processing -->|Payment Fails| Failed;
    Failed -->|User Retries| Processing;
```
### Explanation
- **Initiated**: Payment process starts.
- **Processing**: Payment is being verified.
- **Completed**: Payment is successful.
- **Failed**: The transaction fails but can be retried.

## 4. **Event Object**
```mermaid
graph TD;
    Created -->|Approved by Admin| Published;
    Created -->|Rejected by Admin| Canceled;
    Published -->|User Cancels| Canceled;
    Published -->|Event Date Reached| Completed;
```
### Explanation
- **Created**: A new event is submitted.
- **Published**: The event is approved and visible.
- **Canceled**: The event is removed by the user or admin.
- **Completed**: The event takes place as planned.

## 5. **Ticket Object**
```mermaid
graph TD;
    Available -->|User Buys Ticket| Reserved;
    Reserved -->|Payment Completed| Issued;
    Reserved -->|Payment Not Received| Available;
    Issued -->|Event Ends| Expired;
    Issued -->|User Requests Refund| Refunded;
```
### Explanation
- **Available**: Tickets are available for purchase.
- **Reserved**: The user selects a ticket but hasn’t paid yet.
- **Issued**: The ticket is purchased and valid.
- **Refunded**: The user requests a refund.
- **Expired**: The event has ended.

## 6. **Refund Object**
```mermaid
graph TD;
    Requested -->|Admin Reviews| Processing;
    Processing -->|Approved| Refunded;
    Processing -->|Rejected| Declined;
```
### Explanation
- **Requested**: The user submits a refund request.
- **Processing**: The admin is reviewing the request.
- **Refunded**: The request is approved.
- **Declined**: The refund is denied.
