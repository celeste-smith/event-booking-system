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

- **Booking Lifecycle**
- **Payment Lifecycle**
- **User Account Lifecycle**
- **Service Request Lifecyce**
- **Notification Lifecycle**
- **Review & Rating Lifecycle**

To see these diagrams, you can view it here: **[State Transition Diagrams](/STATE-TRANSITION-DIAGRAMS.md)**

##Activity Workflow Diagrams

These diagrams illustrate the workflows involved in various booking system processes:

- **Booking Process**
- **Payment Processing**
- **Search for Event**
- **Cancel Booking Workflow**
- **User Registration**
- **Admin Approves Service**
- **User Leaves a Review**
- **Manage user accounts**
- **Refund Process**
- **Notification Workflow**

To see these diagrams, you can view it here: **[Activity Diagrams](/ACTIVITY-DIAGRAMS.md)**

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

## Assignment 10 - Class Implementation

All class files are located in the `/src` directory:  
🔗 [View PHP Class Files](./src)

---

### Language Choice: PHP

PHP was selected as the implementation language for the following reasons:

- It is the primary language used in my work environment.
- PHP is well-suited for backend logic and integrates smoothly with relational databases.
- It supports object-oriented programming, encapsulation, inheritance, and modular structure — ideal for transforming UML class diagrams into working code.
- PHP offers flexibility and readability, making it easier to rapidly test and build components for the booking system.

---

### Key Design Decisions

1. **UML-Driven Architecture**  
   The system was implemented directly from a detailed UML Class Diagram, ensuring each class reflects real-world behavior, associations, and responsibilities.

2. **Entity Modularity**  
   Each key system component (e.g., `User`, `Event`, `Booking`, `Payment`, `Ticket`, `Notification`, `Venue`, `Review`) is implemented as a separate class in `/src`, following SRP (Single Responsibility Principle).

3. **Inheritance for Role Separation**  
   `Admin` extends `User`, allowing distinct behaviors while reusing shared logic and enforcing role-based functionality.

4. **Centralized Booking Logic**  
   The `Booking` class serves as the hub, coordinating events, users, payments, and ticket generation — reflecting both the Class Diagram and Activity Workflows from earlier assignments.

5. **Loose Coupling**  
   The `Notification` and `Ticket` classes are loosely coupled to maintain scalability and enable independent testing or substitution.

6. **Relationship Mapping (Multiplicity)**  
   - One `User` → 0..* `Bookings`  
   - One `Booking` → 1 `Event`, 1 `Payment`, 1 `Ticket`  
   - One `Event` → 1 `Venue`

7. **Use of Design Patterns**  
   Where applicable, the implementation uses **creational design patterns**, including:\  
   - Simple Factory  
   - Factory Method  
   - Abstract Factory  
   - Singleton  
   - Builder  
   - Prototype  

---

## Justification for Creational Patterns Used

This project implements the six main creational patterns as part of Assignment 10:
In the development of the Event Booking System, we employed six creational design patterns to enhance flexibility, scalability, and maintainability. These patterns abstract the instantiation process, making the system independent of how its objects are created, composed, and represented.

## 1. Simple Factory Pattern

- **Use Case:** Creating different types of users (e.g., Attendee, Organiser, Admin) and events (e.g., Conference, Workshop, Webinar).

- **Justification:** The Simple Factory Pattern centralizes object creation, providing a single point of control. This promotes code reusability and simplifies maintenance by encapsulating the instantiation logic.

## 2. Factory Method Pattern

- **Use Case:** Allowing subclasses to decide which class to instantiate for creating specific event types.

- **Justification:** The Factory Method Pattern defines an interface for creating an object but lets subclasses alter the type of objects that will be created. This promotes flexibility and adheres to the Open/Closed Principle.

## 3. Abstract Factory Pattern

- **Use Case:** Generating families of related objects, such as UI components (buttons, forms) tailored for different platforms or themes.

- **Justification:** The Abstract Factory Pattern provides an interface for creating families of related or dependent objects without specifying their concrete classes. This ensures consistency among products and supports the addition of new product families without altering existing code.

## 4. Builder Pattern

- **Use Case:** Constructing complex event objects with various optional parameters (e.g., venue, speakers, schedule).

- **Justification:** The Builder Pattern separates the construction of a complex object from its representation, allowing the same construction process to create different representations. This is ideal for creating event objects that require multiple optional components, providing clarity and flexibility in object creation.

## 5. Prototype Pattern

- **Use Case:** Cloning existing event templates for creating new events with similar configurations.

- **Justification:** The Prototype Pattern allows for creating new objects by copying existing ones, which is more efficient than creating new instances from scratch. This is beneficial when new events share many attributes with existing templates, reducing redundancy and potential errors.

## 6. Singleton Pattern

- **Use Case:** Managing the database connection and configuration settings.

- **Justification:** The Singleton Pattern ensures that a class has only one instance and provides a global point of access to it. This is particularly useful for managing shared resources like database connections, ensuring consistent access and preventing conflicts.




