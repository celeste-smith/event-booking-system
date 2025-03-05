# System Requirements Document (SRD)

## 1. Introduction

### 1.1 Purpose
The purpose of this document is to outline the functional and non-functional requirements for the Event Booking System (named EventHub). This system will allow users to search, book, and manage event reservations efficiently.

### 1.2 Scope
The Event Booking System will provide a platform for event organisers to list events and for users to book tickets online. The system will feature the following:
- event searching,
- booking,
- payment processing,
- and ticket management.


---

## 2. Functional Requirements

| ID  | Requirement | Acceptance Criteria |
|------|------------|--------------------|
| FR1 | The system shall allow users to search for events by title, date, location, and category. | Search results should be displayed in under 2 seconds. |
| FR2 | The system shall allow users to register and log in using an email and password. | Users must verify their email before accessing features. |
| FR3 | The system shall allow event organizers to create and manage event listings. | Organisers can update event details any time before booking closes. |
| FR4 | The system shall support online ticket booking and payment processing. | Payment confirmation should be received within 10 seconds. |
| FR5 | The system shall generate digital tickets with QR codes for verification. | QR codes must be scannable at entry points. |
| FR6 | The system shall notify users via email and SMS about booking confirmations. | Notifications should be sent within 1 minute of booking completion. |
| FR7 | The system shall allow users to cancel bookings before a specified deadline. | Refund policies should be enforced according to event rules. |
| FR8 | The system shall provide an admin dashboard for event and user management. | Admins should have access to user logs and event reports. |
| FR9 | The system shall allow users to review and rate events they attended. | Reviews must be linked to a verified booking. |
| FR10 | The system shall support multi-user roles: users, event organizers, and admins. | Role-based access control must be implemented. |

---

## 3. Non-Functional Requirements

### 3.1 Usability
- The interface shall comply with WCAG 2.1 accessibility standards.
- Users should be able to complete a booking in under 3 minutes.

### 3.2 Deployability
- The system shall be deployable on both Windows and Linux servers.
- It shall support cloud-based hosting.

### 3.3 Maintainability
- System documentation shall include an API guide for future integrations.
- Code should follow modular development principles.

### 3.4 Scalability
- The system shall support 1,000 concurrent users during peak hours.
- Database queries should be optimized for high-traffic loads.

### 3.5 Security
- All user data shall be encrypted using AES-256.
- Authentication shall be secured using OAuth 2.0 or equivalent.

### 3.6 Performance
- Search results shall load within 2 seconds.
- Payment transactions should be processed within 5 seconds.

---


## 4. Assumptions and Constraints
- Users must have an internet connection to access the system.
- Some features may require third-party integrations (e.g., payment gateways, email services).

## 5. Conclusion
This document outlines the key functional and non-functional requirements for the Event Booking System to ensure a seamless and secure booking experience for users and event organisers.
