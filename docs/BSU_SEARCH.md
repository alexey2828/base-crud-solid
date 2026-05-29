# BSU Search Functionality Documentation

## Overview

Added comprehensive search functionality to the BSU model following SOLID principles. The implementation uses a layered architecture with:

- **Repository Pattern**: Handles data access logic
- **Service Layer**: Encapsulates business logic
- **Dependency Injection**: Loosely couples components

## Components Created

### 1. BsuRepositoryInterface Update
[app/Contracts/Repositories/BsuRepositoryInterface.php](app/Contracts/Repositories/BsuRepositoryInterface.php)

Added `search(array $criteria): Collection` method to the interface.

### 2. BsuRepository Implementation
[app/Repositories/BsuRepository.php](app/Repositories/BsuRepository.php)

Implements the search method with support for filtering by:
- `id` - Exact match
- `codePlant` - Exact match
- `code` - Exact match
- `name` - Pattern match (LIKE)
- `vMixer` - Exact match
- `isWork` - Boolean match

### 3. BsuSearchServiceInterface
[app/Contracts/Services/BsuSearchServiceInterface.php](app/Contracts/Services/BsuSearchServiceInterface.php)

Defines the search service contract for single responsibility principle.

### 4. BsuSearchService
[app/Services/BsuSearchService.php](app/Services/BsuSearchService.php)

Service class that delegates to the repository, providing a clean interface for search operations.

### 5. Service Provider Registration
[app/Providers/RepositoryServiceProvider.php](app/Providers/RepositoryServiceProvider.php)

Registered both the interface and service implementation in the IoC container.

### 6. BsuFactory
[database/factories/BsuFactory.php](database/factories/BsuFactory.php)

Created factory for generating test data.

### 7. BsuModel Update
[app/Models/Bsu.php](app/Models/Bsu.php)

Added `HasFactory` trait to enable factory support.

## Usage Examples

### Using the Service

```php
use App\Contracts\Services\BsuSearchServiceInterface;

class SomeController
{
    public function __construct(private BsuSearchServiceInterface $bsuSearch)
    {
    }

    public function search()
    {
        // Search by single criterion
        $results = $this->bsuSearch->search(['codePlant' => 'PLANT001']);
        
        // Search by multiple criteria (AND logic)
        $results = $this->bsuSearch->search([
            'codePlant' => 'PLANT001',
            'isWork' => true,
            'name' => 'Test'
        ]);
        
        // Search by any combination of fields
        $results = $this->bsuSearch->search([
            'id' => 5,
            'code' => 'BSU001',
            'vMixer' => 100.5
        ]);
    }
}
```

### Using the Repository Directly

```php
use App\Contracts\Repositories\BsuRepositoryInterface;

$repository = app(BsuRepositoryInterface::class);

// Search with criteria
$results = $repository->search(['codePlant' => 'PLANT001']);
```

## SOLID Principles Applied

### Single Responsibility Principle (SRP)
- `BsuRepository`: Handles data access
- `BsuSearchService`: Handles business logic for searches
- Each class has one reason to change

### Open/Closed Principle (OCP)
- Can extend search functionality by adding new fields to criteria without modifying existing code
- Service can be extended without changing the repository

### Liskov Substitution Principle (LSP)
- `BsuSearchService` implements `BsuSearchServiceInterface`
- Can be substituted anywhere the interface is expected

### Interface Segregation Principle (ISP)
- `BsuRepositoryInterface` and `BsuSearchServiceInterface` define specific contracts
- No unnecessary methods

### Dependency Inversion Principle (DIP)
- Code depends on abstractions (interfaces), not concrete implementations
- Registered in service container for automatic injection

## Search Behavior

- Multiple criteria are combined with AND logic
- Empty criteria array returns all records
- String searches on `name` use LIKE pattern with wildcards
- All other searches are exact matches
- Boolean values are properly cast for `isWork` field

## Testing

Test file: [tests/Feature/BsuSearchServiceTest.php](tests/Feature/BsuSearchServiceTest.php)

Verifies that the service is properly registered in the container and accessible for use.
