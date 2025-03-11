# Use Case Specifications for Event Booking System

## 1. Search Events
**Description:** Allows users to search for events by title, date, location, or category.

**Preconditions:**
- The system must have events listed.
- The user is on the search page.

**Postconditions:**
- The system displays search results based on user input.

**Basic Flow:**
1. User enters search criteria.
2. System retrieves matching events based user input.
3. System displays results to the user.

**Alternative Flows:**
- (A1) No events found → System displays " There are no events that match your search."

---

## 2. View Event Details
**Description:** Users are allowed to view detailed information about an event.

**Preconditions:**
- The event exists in the system.
- The user has selected an event from the search results.

**Postconditions:**
- The user sees event details, including description, date, location, and availability of tickets.

**Basic Flow:**
1. User clicks on an event from search results.
2. System retrieves and displays event details.

**Alternative Flows:**
- (A1) Event is deleted → System displays "This event is no longer available."

---

## 3. User Registration
**Description:** Allows users to create an account to book events.

**Preconditions:**
- User is on the registration page.

**Postconditions:**
- A confirmation email is sent by the system after a new user account is created.

**Basic Flow:**
1. User enters required details (name, email, password, etc.).
2. System validates and saves user details.
3. System sends confirmation email.

**Alternative Flows:**
- (A1) Email already in use → System displays "This email is already registered."

---

## 4. User Login
**Description:** Allows registered users to log in.

**Preconditions:**
- User is registered.
- User has valid login credentials.

**Postconditions:**
- The user is able to access their account.

**Basic Flow:**
1. User enters email and password.
2. System validates credentials.
3. System grants access.

**Alternative Flows:**
- (A1) Incorrect credentials → System displays "Password or email invalid."

---

## 5. Book an Event
**Description:** Allows users to reserve and purchase tickets for an event.

**Preconditions:**
- User is logged in.
- There are available tickets for this event.

**Postconditions:**
- A booking confirmation is sent to the user.

**Basic Flow:**
1. User selects an event and number of tickets.
2. System checks availability.
3. System reserves tickets and processes payment.
4. System sends confirmation email.

**Alternative Flows:**
- (A1) Event is sold out → System displays "There are no tickets available."

---

## 6. Cancel Booking
**Description:** Allows users to cancel an event booking.

**Preconditions:**
- User has an existing booking.

**Postconditions:**
- Booking is cancelled, and the user receives confirmation of cancellation.

**Basic Flow:**
1. User navigates to "My Bookings."
2. User selects a booking to cancel.
3. System processes cancellation and sends confirmation email.

**Alternative Flows:**
- (A1) Cancellation deadline passed → System displays "This booking cannot be cancelled."

---

## 7. Manage Events (For Organisers)
**Description:** Allows event organisers to create, update, or delete events.

**Preconditions:**
- User is an event organiser.
- User is logged in.

**Postconditions:**
- Event is created, updated, or deleted.

**Basic Flow:**
1. Organiser selects "Create Event."
2. Organiser enters event details.
3. System validates and saves event.

**Alternative Flows:**
- (A1) Missing required fields → System displays " Please complete all the mandatory fields."

---

## 8. Generate Sales Report
**Description:** Allows organisers to view event ticket sales reports.

**Preconditions:**
- User is an event organiser.
- User has at least one event with ticket sales.

**Postconditions:**
- System displays a sales report.

**Basic Flow:**
1. Organiser selects "View Sales Report."
2. System retrieves ticket sales data.
3. System displays report.

**Alternative Flows:**
- (A1) No sales recorded → System displays "There are no ticket sales yet."


