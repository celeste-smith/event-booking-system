# CI/CD and Testing Documentation

This document explains how to run tests locally and how the GitHub Actions CI/CD pipeline works for the Event Booking System project.

---

## How to Run Tests Locally

To run tests on your local machine:

1. Make sure you have **Java 17+** and **Apache Maven** installed.
2. Clone the repository or pull the latest changes.
3. Run the following command from the root directory of the project:

## How the CI/CD Pipeline Works
This project uses GitHub Actions to automate:

Stage	Trigger	Description
- Continuous Integration (CI)	Push to any branch / PR to main	Runs all tests using Maven.
- Continuous Deployment (CD)	Push to main after PR merge	Builds .jar and uploads it as an artifact.
- Blocking PRs	Pull Requests to main	PRs must pass tests before they can be merged.

## Branch Protection Rule
To ensure quality, the main branch is protected:

- Requires pull request reviews

- Blocks merges if tests fail

- Requires passing CI status checks

## Artifacts & Reports
###  Test Results
Once a pull request is submitted, the CI workflow runs and shows test results. If tests fail, the PR cannot be merged.

##  Release Artifact
When a PR is merged into main, GitHub Actions builds the final .jar file and uploads it as a downloadable release artifact under the workflow run.




