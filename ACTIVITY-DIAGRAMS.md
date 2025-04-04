#Activity Workflow Modeling with Activity Diagrams

## **Booking a Ticket Workflow**
```mermaid
graph TD;
    A[Select Event] --> B[Choose Seats];
    B --> C[Make Payment];
    C -->|Success| D[Receive Ticket];
    C -->|Failure| E[Retry Payment];
```
**Explanation:**
- Users select an event, pick seats, and make payment.
- A successful payment issues a ticket, while a failure prompts retry options.

## **User Registration Workflow**
```mermaid
graph TD;
    A[Sign Up] --> B[Email Verification];
    B -->|Success| C[Login];
    B -->|Failure| D[Resend Email];
```
**Explanation:**
- Users must verify their email before logging in.
- Failed verifications trigger email resend options.

---
