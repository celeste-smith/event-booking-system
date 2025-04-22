# Reflection on Assignment 10

## Challenges I faces with Assignment 10: 

I ran into issues running the coverage test and struggled to get it to run. The errors I got states that there are no classes defined but all classes listed in the errors are defined. And it is set up correctly. These were the errors I got:

There were 13 errors:

1) AbstractFactoryTest::testWebUIButton
Error: Class "WebUIFactory" not found

C:\Users\marinusc\Documents\event-booking-system\tests\AbstractFactoryTest.php:9

2) AbstractFactoryTest::testWebUIForm
Error: Class "WebUIFactory" not found

C:\Users\marinusc\Documents\event-booking-system\tests\AbstractFactoryTest.php:23

3) AbstractFactoryTest::testMobileUIForm
Error: Class "MobileUIFactory" not found

C:\Users\marinusc\Documents\event-booking-system\tests\AbstractFactoryTest.php:30

4) AbstractFactoryTest::testMobileUIButton
Error: Class "MobileUIFactory" not found

C:\Users\marinusc\Documents\event-booking-system\tests\AbstractFactoryTest.php:16

5) BuilderTest::testBuildEvent
Error: Class "EventBuilder" not found

C:\Users\marinusc\Documents\event-booking-system\tests\BuilderTest.php:9

6) BuilderTest::testBuildEventWithCustomBehavior
Error: Class "EventBuilder" not found

C:\Users\marinusc\Documents\event-booking-system\tests\BuilderTest.php:20

7) FactoryMethodTest::testCreateCreditCardProcessor
Error: Class "PaymentProcessorFactory" not found

C:\Users\marinusc\Documents\event-booking-system\tests\FactoryMethodTest.php:9

8) FactoryMethodTest::testCreatePayPalProcessor
Error: Class "PaymentProcessorFactory" not found

C:\Users\marinusc\Documents\event-booking-system\tests\FactoryMethodTest.php:15

9) FactoryMethodTest::testCreateDebitCardProcessor
Error: Class "PaymentProcessorFactory" not found

C:\Users\marinusc\Documents\event-booking-system\tests\FactoryMethodTest.php:21

10) PrototypeTest::testCloneConcertEvent
Error: Class "ConcertEvent" not found

C:\Users\marinusc\Documents\event-booking-system\tests\PrototypeTest.php:9

11) SimpleFactoryTest::testCreateUser
Error: Class "UserFactory" not found

C:\Users\marinusc\Documents\event-booking-system\tests\SimpleFactoryTest.php:9

12) SimpleFactoryTest::testCreateCustomer
Error: Class "UserFactory" not found

C:\Users\marinusc\Documents\event-booking-system\tests\SimpleFactoryTest.php:17

13) SingletonTest::testDatabaseConnectionSingleton
Error: Class "DatabaseConnection" not found

C:\Users\marinusc\Documents\event-booking-system\tests\SingletonTest.php:9

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

---

By integrating these creational design patterns, the Event Booking System achieves a modular and extensible architecture, facilitating easier maintenance and scalability as the system evolves.

# Reflection on Assignment 9 

## 1. Challenges Faced in Designing the Domain Model and Class Diagram

Designing the domain model and class diagram for the Event Booking System was both insightful and complex. One of the most significant challenges I encountered was abstraction—identifying which components of the system should be modeled as domain entities versus what could be represented as mere attributes or actions.

For example, distinguishing between the `Event` and `Venue` initially proved difficult. At first, I thought about including `Venue` details directly within the `Event` class. However, I later realized that the venue has its own identity, attributes (e.g., capacity, location), and associations (e.g., multiple events could be hosted at one venue). This realisation led to abstracting `Venue` into its own entity.

Defining relationships was another challenge. Inheritance seemed logical for distinguishing between different types of users such as Admin and Customer. However, enforcing meaningful and reusable class hierarchies while keeping the system simple was tricky. There was a strong temptation to overuse inheritance, which I had to intentionally avoid to prevent unnecessary complexity.


## 2. Alignment with Previous Assignments

The class diagram aligns closely with work done in previous assignments. From Assignment 4, the functional requirements such as allowing users to register, book events, make payments, and cancel bookings directly influenced the choice and responsibilities of classes like `User`, `Booking`, and `Payment`.

Assignment 5’s use cases helped identify the flow of actions users take in the system, which clarified method naming and purpose. For instance, `createBooking()`, `cancelBooking()`, and `makePayment()` directly reflect the main use cases.

Assignment 6's Agile sprint tasks helped prioritize which classes were most critical to the system’s MVP. That’s why the core entities like `Event`, `Booking`, and `User` were developed first in the diagram.

Finally, Assignment 8's activity and state diagrams helped visualize how these classes change state and interact. For example, the state of a `Booking` transitions from `Pending` to `Confirmed` to `Cancelled`, which validated the lifecycle logic built into the `Booking` class.

# Reflection on Assignment 8

## 1. Challenges in Choosing Granularity for States/Actions
A challenge I had with assignment 8 was when choosing granularity for states and actions was finding the balance between too much detail and readability. My thoughts were that I do not want to make the diagrams too cluttered and difficult for interpretation by adding too many details, especially for stakeholders who might not have a technical background. I also thought that if I skip on too many details, then the chance of important processes being missed is a possibility which could probably lead to misunderstanding of how the system must behave. 

## 2. Aligning Diagrams with Agile User Stories
Aligning the diagrams with Agile user stories was another challenge. Agile focuses on flexibility and incremental progress, which meant that the diagrams I created needed to be flexible an adaptable to changes. 
.
## 3. Comparing State Diagrams vs. Activity Diagrams
Each diagram had a distinct role in conveying system behavior. The state diagram focused more on the states an object can be in and the transitions that occur based on actions, providing a clear view of the object's lifecycle and activity diagrams illustrated the flow of activities or processes across different actions. 
Overall, working with these diagrams taught me how to balance technical detail with clarity while staying aligned with user stories. I learned that each type of diagram has its strengths and serves a different purpose in understanding the system's behavior and processes.


# Reflection on Project Templates and Kanban Board Implementation - Assignment 7

## Overview
In the beginning of starting this assignment, it became overwhelming as I have not worked on a Kanban Board before, particularly in GitHub. I realised after that it is very similar to a physical scrum or task board and with doing some research as to how the tool work in GitHub, I found it actually quite easy. In Assignment 6, I created the issues and soon realised that I needed to create the labels that was required that is not defaulted in GitHub to link it to the issues and the same went for the Milestones. And these I linked to my Project - Kanban Board. 

## Challenges in Selecting and Customizing the Template  
One of the main challenges in selecting a template for the GitHub Project board was ensuring it aligned with the workflow of the event booking system. While GitHub provides several default templates, such as **"Basic Kanban"** and **"Automated Kanban"**, I needed a template that aligned with Agile Scrum therefore customization was necessary to accommodate specific needs, such as:  

- **Adding a "Testing & Review" column** to account for the QA phase before marking tasks as complete.  
- **Defining task priorities and statuses** clearly to ensure better visibility of ongoing work.  

| Feature            | GitHub Projects        | Trello                | Jira                   |
|--------------------|-----------------------|-----------------------|------------------------|
| **Integration**   | Best for GitHub repos  | Standalone, but integrates with other tools  | Great for complex workflows (Scrum, Kanban) |
| **Customization** | Allows column edits, labels, and automation | Highly customizable, but less automation | Advanced workflows with deep customization |
| **Ease of Use**   | Moderate (learning curve for setup) | Very user-friendly | Can be complex for beginners |
| **Best For**      | Developers using GitHub | Simple task tracking | Large teams, enterprise projects |


- **Trello** is the easiest to use but lacks deep GitHub integration.  
- **Jira** is ideal for **enterprise-level** teams managing sprints, but it can be overcomplicated for smaller projects.  
- **GitHub Projects** is the best option for **developers working directly with GitHub Issues**, making it an ideal choice for version control and continuous development workflows.  

Ultimately, GitHub Projects was chosen because of its **seamless GitHub Issue linking, automation options, and direct integration with code repositories**, making it the most efficient tool for this assignment.



# Reflection on Agile Planning Challenges - Assignment 6

## Introduction
Transitioning from traditional requirement gathering to Agile planning introduces several challenges. As the sole stakeholder in this assignment, I encountered difficulties in prioritising tasks, estimating effort, and aligning Agile methodology with system development.

## 1. Prioritisation Challenges
The challenges was deciding which features should be included in the Minimum Viable Product (MVP). While search and booking functionalities were essential, other features like reporting and system monitoring seemed important but not urgent. Using the **MoSCoW prioritization** method helped break down features into Must-have, Should-have, and Could-have categories. This ensured that implementation of the most critical functionalities can happen first. 

## 2. Effort Estimation Difficulties
Estimating effort in story points was a bit difficult since I had no prior data on development time for each task. I applied the **Fibonacci sequence (1, 2, 3, 5, 8)** to assign story points, keeping estimates relative rather than absolute. For future iterations, tracking actual development time will help refine these estimates.


## 3. Balancing Technical vs. User-Centric Stories
Security and performance requirements (e.g., data encryption, handling 1000 concurrent users) are crucial but does not immediately add visible user value. To balance this, I included at least one **non-functional user story** in the backlog per sprint, ensuring security and performance improvements while focusing on user-facing features.

## 4. Aligning Agile with Stakeholder Needs
Since I play multiple roles (Product Owner, Developer, and Stakeholder), it was difficult to objectively validate priorities. I simulated stakeholder feedback by considering real-world concerns, such as user experience, system reliability, and ease of event management.

## Conclusion
Despite these challenges, Agile planning provided a structured approach to feature development. Refining prioritisation, estimation, and balancing functional vs. technical stories will be key to improving future sprints. I also ended up learning some new things from GitHub based on this assignment. 



# Reflections for Assignment 5

## Introduction
Translating system requirements into structured use cases and test cases is a critical step in software development. However, for those new to the process, several challenges can arise. These challenges impact the accuracy, completeness, and effectiveness of the final system. This document explores key difficulties and strategies to overcome them.

## 1. Understanding the Level of Detail Needed
I was not sure what the appropriate level of detail for use cases and test cases which is where I struggled with. I tried to clarify by using step by step descriptions. 

## 2. Handling Alternative and Exception Flows
When I started the Use Case Specifications, I ignored error scenarios and added alternate flows afterwards.

## Conclusion
Translating requirements into use cases and test cases requires careful planning and attention to detail. I do have an idea or some type of experience in creating use and test cases. 

