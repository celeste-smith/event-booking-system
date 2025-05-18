# Updated: Event Booking System

A modular and testable Java-based Event Booking System that supports user registration, event management, ticket bookings, and notifications.

---

##  Getting Started

Follow the steps below to set up the Event Booking System locally.

###  Prerequisites

- Java 17+
- Apache Maven
- Git

###  Installation

1. Clone the repository:

```bash
git clone https://github.com/your-username/event-booking-system.git
cd event-booking-system
```

2. Build the project and run tests:

```bash
mvn clean install
mvn test
```

3. To run the REST API:

```bash
mvn spring-boot:run
```

4. Access the API at `http://localhost:8080/api`

---

##  Features for Contribution

Here are current areas you can contribute to. Visit the [ROADMAP.md](ROADMAP.md) for more!

| Feature                                  | Status     | Labels                                |
|------------------------------------------|------------|----------------------------------------|
| Add User Profile Page                    | In Progress | `feature-request`, `frontend`          |
| Enable Email Reminders                   | Planned    | `feature-request`, `backend`, `email` |
| Add Ticket Download as PDF               | Planned    | `feature-request`, `backend`, `UX`    |
| Add Event Search Filter by Category      | Planned    | `feature-request`, `frontend`         |
| Fix README Headings                      | Open       | `good-first-issue`, `documentation`   |
| Add JavaDoc to `UserService`             | Open       | `good-first-issue`, `documentation`   |
| Create Unit Test for `Notification`      | Open       | `good-first-issue`, `testing`         |

---

##  Ready to Contribute?

Please read our [CONTRIBUTING.md](CONTRIBUTING.md) guide and check the issues labeled:
- `good-first-issue` (for beginners)
- `feature-request` (new enhancements)

---
