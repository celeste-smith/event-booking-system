# Product Backlog for Event Booking System (Name: EventHub)

## Prioritised Backlog Using MoSCoW Method

| Story ID | User Story | Priority (MoSCoW) | Effort Estimate (Story Points) | Dependencies |
|----------|-----------|------------------|------------------------------|--------------|
| US-001 | Search for events by title, date, or location | Must-have | 3 | None |
| US-003 | Book a ticket for an event | Must-have | 5 | US-001 |
| US-005 | Create a new event with details | Must-have | 5 | None |
| US-004 | Receive a booking confirmation email | Must-have | 2 | US-003 |
| US-008 | Manage user accounts (create, update, disable) | Must-have | 4 | None |
| US-002 | View event details (description, venue, date, time) | Should-have | 2 | US-001 |
| US-006 | Edit and update event details | Should-have | 3 | US-005 |
| US-009 | Oversee payments and refunds | Should-have | 4 | US-003 |
| US-007 | View reports on ticket sales | Could-have | 3 | US-005 |
| US-010 | Monitor system uptime and performance | Could-have | 3 | None |

## Justification for Prioritisation
- **Must-have** stories align with critical functionality (searching, booking, user management).
- **Should-have** stories improve usability and experience but can be developed after core features.
- **Could-have** stories enhance reporting and monitoring but are not immediate priorities.
- Effort estimates follow a Fibonacci scale (1, 2, 3, 5, 8) for better task estimation and planning.

