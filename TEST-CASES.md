# Test Case Development

## Functional Test Cases

| Test Case ID | Test Scenario | Preconditions | Steps | Expected Result |
|-------------|--------------|--------------|-------|----------------|
| TC-01 | User searches for an event | User is logged in | 1. Navigate to search bar <br> 2. Enter event name <br> 3. Click search | System displays event details  user searched for|
| TC-02 | User books an event | User is logged in and event is available | 1. Select event <br> 2. Click 'Book Now' <br> 3. Confirm details <br> 4. Make payment | The booking confirmation is displayed and emailed |
| TC-03 | Admin creates a new event | Admin is logged in | 1. Navigate to 'Create Event' page <br> 2. Enter event details <br> 3. Click 'Save' | Event is successfully created |
| TC-04 | User cancels a booking | User has a confirmed booking | 1. Navigate to 'My Bookings' <br> 2. Select booking <br> 3. Click 'Cancel' | Booking is cancelled, and refund (if applicable) is processed |
| TC-05 | User registers for an account | User is on the registration page | 1. Enter personal details <br> 2. Click 'Register' <br> 3. Verify email | Account is successfully created |
| TC-06 | User resets password | User has an existing account | 1. Click 'Forgot Password' <br> 2. Enter email <br> 3. Check inbox for reset link <br> 4. Set new password | Password is reset successfully |
| TC-07 | System processes payment | User has a booking and payment method | 1. Enter payment details <br> 2. Confirm payment | Payment is successfully processed |
| TC-08 | Admin views system reports | Admin is logged in | 1. Navigate to 'Reports' <br> 2. Select report type <br> 3. Click 'Generate' | Report is generated and displayed |

## Non-Functional Test Cases

| Test Case ID | Test Scenario | Test Type | Steps | Expected Result |
|-------------|--------------|----------|-------|----------------|
| NTC-01 | System handles 1000+ concurrent users | Performance | 1. Simulate 1000 users accessing the system | System remains responsive and stable |
| NTC-02 | User data is securely encrypted | Security | 1. Attempt to access stored user data | Data remains encrypted and inaccessible to unauthorised users |
