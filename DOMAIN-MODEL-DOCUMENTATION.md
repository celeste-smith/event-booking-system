# Domain Model – Event Booking System (EventHub)

This domain model outlines the key entities, their attributes, methods, relationships, and business rules in the Event Booking System.

---

## Entity Table

| Entity        | Attributes                                                                 | Methods                                                  | Relationships                                                       |
|---------------|----------------------------------------------------------------------------|----------------------------------------------------------|----------------------------------------------------------------------|
| User (Represents a registered person using the system)         |  `userId`: String, `name`: String, `email`: String, `password`: String, `role`: Enum (Admin, Customer),  `phoneNumber`: String                      |  `register()`, `login()`, `updateProfile()`, `viewBookings()`    | A User *creates/cancels* 0..* Bookings. A User *receives* 0..* Notifications. A User *writes* 0..* Reviews.                                   |
| Admin *(inherits from User)*         | eventId, title, description, date, time, location, capacity, status        | createEvent(), updateEvent(), cancelEvent(), isAvailable() | Created by Admin, linked to multiple Bookings                       |
| Event (Represents a scheduled event)        | `eventId`: String, `title`: String, `description`: String, `date`: Date, `time`: Time, `location`: String, `availableSeats`: int, `status`: Enum (Draft, Published, Cancelled, Completed)        | `createEvent()`, `editEvent()`, `cancelEvent()`, `isAvailable()` | Belongs to a Venue. Has 0..* Bookings.  Can be Reviewed by Users.  Belongs to 1..* Categories . Created by Admin.                   |
| Booking (Represents a user's reservation for an event)      | `bookingId`: String, `userId`: String, `eventId`: String, `bookingDate`: DateTime, `numOfTickets`: int, `status`: Enum (Pending, Confirmed, Cancelled)                         | `createBooking()`, `cancelBooking()`, `modifyBooking()`        |  Linked to 1 User. Linked to 1 Event. Linked to 1 Payment. May generate 1 Ticket                                      |
| Payment (Represents a financial transaction related to a booking)      | `paymentId`: String, `bookingId`: String, `amount`: double, `paymentMethod`: Enum (Card, EFT, etc.), `status`: Enum (Pending, Paid, Failed)          | `processPayment()`, `refundPayment()`,  `validatePayment()`                              | Associated with a Booking                                            |
| Notification (System messages sent to users (e.g., confirmation, updates)) | `notificationId`: String, `userId`: String, `message`: String, `sentAt`: DateTime, `readStatus`: Boolean                     | sendNotification(), markAsRead()                         | Sent to Users                                                        |
| Venue (A physical location where an event is held)        | `venueId`: String, `name`: String, `address`: String, `capacity`: int                                           | `addVenue()`, `updateVenue()`,  `isAvailable()`                | Linked to Events                                                     |
| Ticket (Represents the confirmation of an event booking)       | `ticketId`: String, `seatNumber`: String, `issuedAt`: DateTime, `status`: Enum (Valid, Used, Cancelled)                            | `generateTicket()`, `cancelTicket()`, `validateEntry()`      | Generated for a Booking                                              |

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


