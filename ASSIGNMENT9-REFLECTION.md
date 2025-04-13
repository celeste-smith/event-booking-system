## Reflection 

### 1. Challenges Faced in Designing the Domain Model and Class Diagram

Designing the domain model and class diagram for the Event Booking System was both insightful and complex. One of the most significant challenges I encountered was abstraction—identifying which components of the system should be modeled as domain entities versus what could be represented as mere attributes or actions.

For example, distinguishing between the `Event` and `Venue` initially proved difficult. At first, I thought about including `Venue` details directly within the `Event` class. However, I later realized that the venue has its own identity, attributes (e.g., capacity, location), and associations (e.g., multiple events could be hosted at one venue). This realisation led to abstracting `Venue` into its own entity.

Defining relationships was another challenge. Inheritance seemed logical for distinguishing between different types of users such as Admin and Customer. However, enforcing meaningful and reusable class hierarchies while keeping the system simple was tricky. There was a strong temptation to overuse inheritance, which I had to intentionally avoid to prevent unnecessary complexity.


### 2. Alignment with Previous Assignments

The class diagram aligns closely with work done in previous assignments. From Assignment 4, the functional requirements such as allowing users to register, book events, make payments, and cancel bookings directly influenced the choice and responsibilities of classes like `User`, `Booking`, and `Payment`.

Assignment 5’s use cases helped identify the flow of actions users take in the system, which clarified method naming and purpose. For instance, `createBooking()`, `cancelBooking()`, and `makePayment()` directly reflect the main use cases.

Assignment 6's Agile sprint tasks helped prioritize which classes were most critical to the system’s MVP. That’s why the core entities like `Event`, `Booking`, and `User` were developed first in the diagram.

Finally, Assignment 8's activity and state diagrams helped visualize how these classes change state and interact. For example, the state of a `Booking` transitions from `Pending` to `Confirmed` to `Cancelled`, which validated the lifecycle logic built into the `Booking` class.


### 4. Lessons Learned About Object-Oriented Design

Modeling the domain forced me to think like both a developer and a system analyst. I had to balance technical soundness with real-world business requirements, stakeholder needs, and system goals. This reflection process helped cement how essential domain modeling is in the early stages of software design.
