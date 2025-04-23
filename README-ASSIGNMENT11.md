## Storage-Abstraction Mechanism

To decouple the repository layer from storage specifics, we implemented the **Factory Pattern**. This design pattern allows us to encapsulate the instantiation logic of repositories, enabling the application to switch between different storage backends (e.g., in-memory, database) without modifying the business logic.

**Why Factory Pattern?**

- **Flexibility:** Easily switch between different storage implementations.
- **Maintainability:** Centralizes object creation, making the codebase easier to manage.
- **Scalability:** Simplifies the addition of new storage types in the future.

**Implementation Details:**

- All repository interfaces are defined in `src/repositories/`.
- In-memory implementations are located in `src/repositories/inmemory/`.
- The `RepositoryFactory` in `src/factories/` returns the appropriate repository implementation based on the specified storage type.
- Services obtain repository instances via the factory, promoting loose coupling and adherence to the Dependency Inversion Principle.
