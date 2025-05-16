# Contributing to Event Booking System


## Setup Instructions

### Prerequisites

Before contributing, please ensure you have the following installed:

- Java 17 or newer
- Apache Maven
- Git

###  Installation

To set up the project locally:

```bash
git clone https://github.com/celeste-smith/event-booking-system.git
cd event-booking-system

```

Build and test the project:
mvn clean install
mvn test

## Coding Standards

### Code Style
- Follow Java best practices

- Use meaningful names for classes, methods, and variables

- Organize files under the correct directories (src/ for code, tests/ for tests)

### Linting & Formatting

- Use your IDE’s auto-format feature

- Keep indentation consistent

- Avoid unused variables and imports

## Testing

-  All code must include relevant unit or integration tests

-  Run the full test suite locally before committing:
  mvn test

## Picking Issues & Submitting PRs

###  Issue Labels

- good-first-issue: beginner-friendly and easy to solve

- feature-request: enhancements and planned improvements

- bug: known problems that need fixing

- help wanted: tasks needing extra hands

### Steps to Contribute

1. Fork the repository

2. Pick an issue (start with good-first-issue or feature-request)

3. Create a feature branch:
   
git checkout -b feature/your-feature-name

4. Make changes, including tests
   
5. Commit clearly:
   git commit -m "Add: Your brief but descriptive message"

6. Push your branch:
git push origin feature/your-feature-name

7. Open a Pull Request (PR):

- Add a title and description

- Link to the issue (e.g., Closes #12)

## Code Review

 - PRs will be reviewed within a few days.

- You may be asked to revise your code.

- Once approved, it will be merged into main.
