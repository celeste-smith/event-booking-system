# Branch Protection Rules for Event Booking API

To maintain a high-quality codebase and promote safe collaboration, we have implemented branch protection rules on the `main` branch. These rules enforce automated testing, require peer review, and prevent accidental changes from being pushed directly to production.

##  Branch Protection Rules Applied

###  Protected Branch: `main`
- **Require pull request reviews before merging**: 
  - At least one approving review is mandatory before a pull request can be merged.
  - Ensures that code is peer-reviewed for quality, correctness, and security.

- **Require status checks to pass before merging**: 
  - Our GitHub Actions CI pipeline runs automatically on every push and pull request.
  - All tests (unit and integration) must pass to merge a pull request.
  - Prevents broken code from being deployed or released.

- **Require branches to be up to date before merging**:
  - PRs must be synced with the latest `main` changes before merging.
  - Avoids integration conflicts and surprises after merging.

- **Restrict direct pushes to `main`**:
  - No one can push directly to the `main` branch.
  - All changes must go through a pull request.
  - Enforces team workflows and accountability.

##  Benefits of These Rules

-  **Higher Code Quality**: Automated tests and reviews catch bugs early.
-  **Safer Deployments**: Production only receives fully-tested, reviewed code.
-  **Traceable History**: Every change has context—linked to issues, PRs, and reviewers.
-  **Team Collaboration**: Encourages open collaboration and feedback among developers.

##  Additional Notes

These rules are critical as the project grows, especially when multiple contributors are involved. They help us prevent regressions and build confidence in each release.

> If urgent hotfixes are needed, they can be made through a dedicated `hotfix` branch and merged via PR, still respecting the review and CI process.
