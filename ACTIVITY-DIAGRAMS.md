# Activity Workflow Modeling

## 1. User Registration
### Activity Diagram
```mermaid
graph TD;
  Start -->|User enters details| ValidateUser;
  ValidateUser -->|Valid?| CreateAccount{Valid Details?};
  CreateAccount -- Yes --> SendVerification;
  SendVerification -->|User verifies email| AccountActivated;
  CreateAccount -- No --> DisplayError;
  AccountActivated --> End;
```
### Explanation
- **Actors**: User, System
- **Steps**: User enters details, system validates, sends email verification, activates account.
- **Stakeholder Impact**: Ensures only verified users can book events.

---

## 2. Search for Events
### Activity Diagram
```mermaid
graph TD;
  Start -->|User enters search query| CheckDatabase;
  CheckDatabase -->|Results found?| ShowResults{Results?};
  ShowResults -- Yes --> DisplayEvents;
  ShowResults -- No --> ShowNoResults;
  DisplayEvents --> End;
```
### Explanation
- **Actors**: User, System
- **Steps**: Search event database and display results.
- **Stakeholder Impact**: Enhances user experience with efficient search.

---

## 3. Book a Ticket
### Activity Diagram
```mermaid
graph TD;
  Start -->|User selects event| ChooseSeats;
  ChooseSeats -->|User confirms selection| ProceedToPayment;
  ProceedToPayment -->|Payment Successful?| PaymentStatus{Payment Successful?};
  PaymentStatus -- Yes --> GenerateTicket;
  PaymentStatus -- No --> ShowPaymentError;
  GenerateTicket --> End;
```
### Explanation
- **Actors**: User, Payment System
- **Steps**: User selects seats, completes payment, receives ticket.
- **Stakeholder Impact**: Secure and seamless booking process.

---

## 4. Receive Booking Confirmation
### Activity Diagram
```mermaid
graph TD;
  Start -->|User completes booking| GenerateEmail;
  GenerateEmail -->|System sends confirmation| EmailSent;
  EmailSent --> End;
```
### Explanation
- **Actors**: System, User
- **Steps**: Booking confirmation email is sent after successful payment.
- **Stakeholder Impact**: Provides proof of purchase for users.

---

## 5. Create a New Event
### Activity Diagram
```mermaid
graph TD;
  Start -->|Organiser enters details| ValidateEvent;
  ValidateEvent -->|Event details valid?| EventStatus{Valid?};
  EventStatus -- Yes --> PublishEvent;
  EventStatus -- No --> ShowError;
  PublishEvent --> End;
```
### Explanation
- **Actors**: Event Organiser, System
- **Steps**: Organisers submit event details, system validates, publishes event.
- **Stakeholder Impact**: Ensures only complete and valid events are published.

---

## 6. Manage User Accounts
### Activity Diagram
```mermaid
graph TD;
  Start -->|Admin selects user| ChooseAction;
  ChooseAction -->|Update details?| UpdateAccount;
  ChooseAction -->|Deactivate account?| DeactivateUser;
  UpdateAccount --> End;
  DeactivateUser --> End;
```
### Explanation
- **Actors**: Admin
- **Steps**: Admin can update or deactivate user accounts.
- **Stakeholder Impact**: Enhances system control and security.

---

## 7. Process Payments and Refunds
### Activity Diagram
```mermaid
graph TD;
  Start -->|User submits payment| VerifyPayment;
  VerifyPayment -->|Valid?| PaymentApproved{Payment Valid?};
  PaymentApproved -- Yes --> ProcessTransaction;
  PaymentApproved -- No --> ShowPaymentError;
  ProcessTransaction --> End;
```
### Explanation
- **Actors**: User, Payment System
- **Steps**: Payment is verified and processed, or an error is shown.
- **Stakeholder Impact**: Secure transactions reduce fraud risk.

---

## 8. Monitor System Performance
### Activity Diagram
```mermaid
graph TD;
  Start -->|System logs metrics| AnalyzePerformance;
  AnalyzePerformance -->|Issue detected?| PerformanceStatus{Issue Found?};
  PerformanceStatus -- Yes --> AlertAdmin;
  PerformanceStatus -- No --> ContinueMonitoring;
  AlertAdmin --> End;
  ContinueMonitoring --> End;
```
### Explanation
- **Actors**: System, Admin
- **Steps**: System monitors performance, detects issues, alerts admin.
- **Stakeholder Impact**: Ensures system reliability and uptime.

---
