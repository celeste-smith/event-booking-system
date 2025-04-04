# Event Booking System – (Name of Booking System: Event Hub)

## Introduction
The **Event Booking System (Event Hub)** is a web-based platform that allows users to browse, book, and manage event tickets. It streamlines the event reservation process, providing an efficient way for users to book seats for an event. 


## Features
- **User Registration & Login** – Users can create accounts and securely log in.
- **Browse Available Events** – Users can view a list of current and upcoming events with event details.
- **Book & Cancel Tickets** – Users can reserve seats and have an option to cancel bookings if needed.
- **Payment Processing (Optional)** – Users can make secure online payments for when they purchase a ticket to an event. 
- **Admin Dashboard** – The event organisers can manage (create/update) events.


## Project Structure
This repository includes the following files:
- **`README.md`** – An overview of the project.
- **`SPECIFICATION.md`** – This file contains the system requirements and detailed specifications.
- **`ARCHITECTURE.md`** – This includes the architectural modelling and C4 diagrams.


## Links
- [System Specification](SPECIFICATION.md)
- [Architecture & C4 Diagrams](ARCHITECTURE.md)


## Technologies Used (To Be Determined)
- Frontend: (e.g., React or plain HTML/CSS/JS)
- Backend: (e.g., Python Flask, or PHP)
- Database: (e.g., MySQL)


# Event Booking Development - Kanban Board

## Overview
This Kanban board is designed to track the development process of the Event Booking System project. It helps manage tasks efficiently by organizing user stories into different stages of the development lifecycle.

## Customization Choices

### Added Columns
- **Product Backlog**: Stores user stories and tasks that are planned for future sprints.
- **Sprint Backlog**: Contains selected tasks that are part of the current sprint.
- **In Progress/Development**: Tracks tasks actively being worked on.
- **Testing & Review**: Tasks awaiting testing, approval, or code review.
- **Done**: Completed tasks that have been reviewed and approved.

### Linked Issues & Labels
- Each user story is linked to an issue from the repository.
- Issues are labeled appropriately (e.g., `feature`, `bug`) to categorize tasks effectively.

### Task Assignments
- Team members are assigned tasks using `@mentions` for clear responsibility allocation.

## Screenshot
![Kanban Board](https://github.com/celeste-smith/event-booking-system/blob/main/kanban-board.png)

## Link to my Kanban (project) Board:
https://github.com/users/celeste-smith/projects/3/views/1


# Booking System: Dynamic Behavior Modeling

This repository contains state transition diagrams and activity workflow diagrams to model the dynamic behavior of the booking system.

##State Transition Diagrams
These diagrams depict how key objects transition between different states:

- **[Booking Lifecycle](STATE-TRANSITION-DIAGRAMS.md)**
- **[Payment Lifecycle](diagrams/payment_state.md)**
- **[User Account Lifecycle](diagrams/user_account_state.md)**
- **[Service Request Lifecycle](diagrams/service_request_state.md)**
- **[Notification Lifecycle](diagrams/notification_state.md)**
- **[Review & Rating Lifecycle](diagrams/review_rating_state.md)**

##Activity Workflow Diagrams
These diagrams illustrate the workflows involved in various booking system processes:

- **[Booking Process](diagrams/booking_process.md)**
- **[Payment Processing](diagrams/payment_workflow.md)**
- **[Cancel Booking Workflow](diagrams/cancel_booking.md)**
- **[User Registration](diagrams/user_registration.md)**
- **[Admin Approves Service](diagrams/admin_approve_service.md)**
- **[User Leaves a Review](diagrams/user_review.md)**
- **[Refund Process](diagrams/refund_workflow.md)**
- **[Notification Workflow](diagrams/notification_workflow.md)**

##Traceability to Functional Requirements & User Stories
This section maps system requirements and user stories to their corresponding state and activity diagrams.

| **Requirement/User Story** | **Related Activity Diagram** | **Related State Diagram** |
|----------------------------|------------------------------|---------------------------|
| FR-001 - Book Appointment | Booking Process | Booking Lifecycle |
| FR-002 - User Registration | User Registration | User Account Lifecycle |
| FR-003 - Payment Handling | Payment Processing | Payment Lifecycle |
| FR-004 - Admin Approves Services | Admin Approves Service | Service Request Lifecycle |
| FR-005 - Cancel Booking | Cancel Booking Workflow | Booking Lifecycle |
| FR-006 - Send Notifications | Notification Workflow | Notification Lifecycle |
| FR-007 - Refund Processing | Refund Process | Payment Lifecycle |
| FR-008 - User Leaves Review | User Leaves a Review | Review & Rating Lifecycle |

## Explanation
Each diagram has a corresponding markdown file detailing:
- **Key states & transitions (for state diagrams)**
- **Workflow breakdown (for activity diagrams)**
- **Alignment with system requirements and user needs**



