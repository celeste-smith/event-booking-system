# Kanban Board Setup and Explanation

## 1. Overview

A Kanban board is a visual workflow management tool that helps manage work by displaying tasks arranged in columns, where each column represents a different development stage of the process making it easy for teams to track workflow and identify bottlenecks and to see what needs to be done, what’s in progress, and what’s completed, making it easier to track workflow and identify bottlenecks.

My  GitHub **Kanban Board** was created to manage the development of the **Event Booking System (EventHub)**, following the **Sprint Plan** from Assignment 6.

## 2. Column Setup
The board was structured to align with Agile principles and the development workflow.

| Column Name | Purpose |
|-------------|---------|
| **Product Backlog** | Contains all user stories from the Product Backlog. |
| **Sprint Backlog** | Selected task/user stories that are prioritized for the current sprint. |
| **In Progress/Development** | Stories actively being developed. |
| **Testing & Review** | Stories that are completed but need code review, testing or approval. |
| **Done** | Completed user stories that have passed testing. |

## 3. Creating Labels for Issues
To categorize issues efficiently, the following labels were created in GitHub:

| Label Name | Color | Purpose |
|------------|-------|---------|
| **User Story** | 🟢 `#28a745` | Identifies functional requirements from the backlog. |
| **Task** | 🔵 `#00509e` | Represents a specific development task. |
| **Bug** | 🔴 `#d73a4a` | Marks issues related to system errors or defects. |
| **Must-have** | 🔵 `#0075ca` | High-priority user stories necessary for the MVP. |
| **Should-have** | 🟠 `#ff9f1c` | Features that enhance usability but are not critical. |
| **Could-have** | 🟡 `#ffcc00` | Low-priority features for future sprints. |
| **Frontend** | 🟦 `#1E90FF` | Assigned to UI-related tasks. |
| **Backend** | 🟧 `#FFA500` | Assigned to API and database tasks. |
| **QA** | 🟩 `#32CD32` | Assigned to testing tasks. |

### **How Labels Were Created:**
1. **Go to the GitHub Repository** → Click **Issues** → Click **Labels**.
2. Click **New Label** → Enter the label name.
3. Choose a **color** for easy identification.
4. Click **Create Label**.
- **PLEASE NOTE: ** Custom Role-Based Labels were created to assign roles. 

## 4. Creating Issues for the Board
Each user story and task from the Sprint Plan was added as a GitHub **Issue**:

### **How Issues Were Created:**
1. **Go to the GitHub Repository** → Click **Issues** → Click **New Issue**.
2. **Title:** Use the **Story ID** from the backlog (e.g., `US-001 - Search for Events`).
3. **Description:** Include user story details and acceptance criteria.
4. **Labels:** Assign appropriate labels (`User Story`, `Task`, `Bug`, etc.).
5. **Milestone:** Assign to the correct sprint (e.g., `Sprint 1 - MVP Development`).
6. Click **Submit Issue**.

## 5. Assigning Tasks to Team Members using @Mentions
To simulate team assignments, dummy team members were referenced using `@mentions`:

| Issue ID | User Story | Role | Assigned Team Member (Dummy) |
|----------|-----------|------|--------------------------|
| **US-001** | Search for events by title, date, or location | Frontend Developer | @malibongwe-dywibiba (Frontend) | 
| **US-002** | View event details (description, venue, date, time) | Frontend Developer | @palesa-sello (Frontend) |
| **US-003** | Book a ticket for an event | Backend Developer | @faizel-snyders (Backend) |
| **US-004** | Receive a booking confirmation email | Backend Developer | @kim-oldjohn (Backend) |
| **US-005** | Create a new event with details | Backend Developer | @tania-andrews (Backend) |
| **US-006** | Edit and update event details | Backend Developer | @alfonso-basson (Backend) |
| **US-007** | View reports on ticket sales | QA Tester | @adam-behardien (QA) |
| **US-008** | Manage user accounts (create, update, disable) | Backend Developer | @wafeeka-bridgemohan (Backend) |
| **US-009** | Oversee payments and refunds | Backend Developer | @kyle-jessman (Backend) |
| **US-010** | Monitor system uptime and performance | QA Tester | @melinda-petersen (QA) |

### **How @Mentions Were Used Inside Issues**
To ensure each task had a clear owner, the following @mentions were added in the issue descriptions and comments.

### **Alternative: Assigning Labels Instead of Users**
Since GitHub does not allow assigning tasks to non-existing users, the **Frontend, Backend, and QA labels** were used to categorize tasks:
- **Frontend tasks** were labeled with `Frontend`.
- **Backend tasks** were labeled with `Backend`.
- **Testing tasks** were labeled with `QA`.


## 6. Linking Issues to the Board
1. **Go to the GitHub Project Board**.
2. Click **"+ Add cards"** (top-right corner).
3. Select the **Issues** created earlier.
4. Drag them to the **appropriate column** (Backlog, Sprint Backlog, etc.).

## 7. Linking the Board to Assignment 6
- **User Stories from the Product Backlog** were added to the **Backlog column**.
- **Tasks/User Stories from the Sprint Backlog** were added to the **Sprint Backlog**.
- **Sprint 1 Milestone, Sprint 2 Milestone, Sprint 3 Milestone and Sprint 4 Milestone** was created and assigned to selected stories.


## 8. Agile Workflow Implementation
- **Sprint Planning**: Stories are moved from **Backlog → Ready**.
- **Development**: Active work moves from **Ready → In Progress/Development**.
- **Testing & Review**: Completed work moves to **Testing & Review** for final testing.
- **Completion**: Approved stories are moved to **Done**.

## 9. Conclusion
The Kanban board ensures that all tasks from the **Sprint Plan** are properly tracked, allowing for efficient development and clear progress visibility. The integration of **labels, issues, and milestones** makes it easy to manage and execute the project using Agile principles.
