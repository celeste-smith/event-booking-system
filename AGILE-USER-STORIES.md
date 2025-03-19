# Agile User Stories for Event Booking System (Name: EventHub)

## User Story Table

| Story ID | User Story | Acceptance Criteria | Priority |
|----------|-----------|---------------------|----------|
| US-001 | As an event attendee, I want to search for events by title, date, or location so that I can easily find events that interest me. | Search results load in ≤2 seconds and display availability. | High |
| US-002 | As an event attendee, I want to view event details (description, venue, date, time) so that I can decide whether to attend. | Event details must be displayed correctly with all required information. | High |
| US-003 | As an event attendee, I want to book a ticket for an event so that I can secure my spot. | Booking is processed successfully, and confirmation email is sent. | High |
| US-004 | As an event attendee, I want to receive a confirmation email after booking so that I have proof of my reservation. | Email is sent within 1 minute of booking confirmation. | High |
| US-005 | As an event organiser, I want to create a new event with details such as title, date, venue, and price so that I can list it for attendees. | Event is successfully created and listed in the system. | High |
| US-006 | As an event organiser, I want to edit and update my event details so that attendees have the latest information. | Changes are saved and reflected immediately. | Medium |
| US-007 | As an event organiser, I want to view reports on ticket sales so that I can track event performance. | Reports display accurate and real-time sales data. | Medium |
| US-008 | As an admin, I want to manage user accounts (create, update, disable) so that I can ensure system security and compliance. | Admin can perform all user management functions successfully. | High |
| US-009 | As an admin, I want to oversee payments and refunds so that transactions are processed correctly. | Payments and refunds are logged correctly with transaction IDs. | High |
| US-010 | As an admin, I want to monitor system uptime and performance so that I can ensure a smooth user experience. | System uptime statistics and logs are accessible. | Medium |

## Non-Functional User Stories

| Story ID | User Story | Acceptance Criteria | Priority |
|----------|-----------|---------------------|----------|
| NFS-001 | As a system admin, I want user data encrypted with AES-256 so that security compliance is met. | All sensitive data is stored using AES-256 encryption. | High |
| NFS-002 | As a system, I want to handle up to 1000 concurrent users so that event booking remains stable during peak times. | System remains responsive with 1000+ users. | High |
| NFS-003 | As an event organiser, I want analytics reports to load within 5 seconds so that I can make quick decisions. | Reports generate within 5 seconds. | Medium |
| NFS-004 | As a user, I want a mobile-responsive design so that I can access the system from any device. | UI scales correctly on mobile and desktop. | High |

