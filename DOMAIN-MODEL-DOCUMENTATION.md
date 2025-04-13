# Domain Model – Event Booking System (EventHub)

This domain model outlines the key entities, their attributes, methods, relationships, and business rules in the Event Booking System.

---

## Entity Table

| Entity        | Attributes                                                                 | Methods                                                  | Relationships                                                       |
|---------------|----------------------------------------------------------------------------|----------------------------------------------------------|----------------------------------------------------------------------|
| User (Represents a registered person using the system)         |  `userId`: String, `name`: String, `email`: String, `password`: String, `role`: Enum (Admin, Customer),  `phoneNumber`: String                      |  `register()`, `login()`, `updateProfile()`, `viewBookings()`    | A User *creates* 0..* Bookings, A User *receives* 0..* Notifications, A User *writes* 0..* Reviews                                   |
| Event         | eventId, title, description, date, time, location, capacity, status        | createEvent(), updateEvent(), cancelEvent(), isAvailable() | Created by Admin, linked to multiple Bookings                       |
| Booking       | bookingId, userId, eventId, bookingDate, status                            | createBooking(), cancelBooking(), updateStatus()         | Belongs to a User and an Event                                       |
| Payment       | paymentId, bookingId, amount, paymentDate, paymentMethod, status           | processPayment(), refund()                               | Associated with a Booking                                            |
| Notification  | notificationId, userId, message, sentDate, readStatus                      | sendNotification(), markAsRead()                         | Sent to Users                                                        |
| Venue         | venueId, name, location, capacity                                           | addVenue(), updateVenue(), removeVenue()                 | Linked to Events                                                     |
| Ticket        | ticketId, bookingId, qrCode, seatNumber, status                            | generateTicket(), validateTicket(), cancelTicket()       | Generated for a Booking                                              |

---

##Business Rules

- A **User** must be registered to make a **Booking**.
- An **Event** can only be booked if `status = Active` and `capacity > 0`.
- Each **Booking** must be linked to a valid **Payment**.
- A **User** can only cancel a **Booking** if the **Event** is still upcoming.
- An **Admin** can create or cancel **Events**.
- A **Ticket** is generated only after **Payment** is successful.
- Notifications are sent on actions like booking confirmation, cancellations, and event changes.

---

##Notes

- Attributes are chosen based on functional and non-functional requirements from Assignment 4.
- Relationships follow the object state/activity workflows from Assignment 8.
- Methods map to use cases and system behaviours outlined in Assignments 5 and 6.

