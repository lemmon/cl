# Roadmap

This document outlines the planned improvements and future direction for the `cl` library.

## Short-term Goals

### 1. Support Multiple Arguments

- **Description**: Allow passing multiple variables to the `cl()` function, similar to `var_dump()` or `dump()`.
- **Usage**: `cl($var1, $var2, $var3);`
- **Status**: Planned

### 2. Functional Return Value

- **Description**: Update `cl()` to return the variable(s) being dumped. If one variable is passed, return it. If multiple are passed, return them as an array.
- **Benefit**: Enables inline usage: `return cl($data);` or `$result = cl(calculate());`.
- **Status**: Planned

### 3. Enhanced Testability

- **Description**: Refactor the internal implementation to allow overriding the output stream.
- **Benefit**: Allows unit tests to capture and verify the actual output (e.g., using `php://memory`) instead of just checking if the function exists.
- **Status**: Planned

### 4. Static Resource Optimization

- **Description**: Cache the `VarCloner` and `CliDumper` instances as static variables alongside the output stream.
- **Benefit**: Reduces the overhead of re-instantiating these objects on every call to `cl()`.
- **Status**: Planned

## Long-term Goals

### 5. Static Analysis & Linting

- **Description**: Integrate tools like PHPStan or Psalm for static analysis and `friendsofphp/php-cs-fixer` for style enforcement.
- **Status**: Planned

### 6. CI/CD Integration

- **Description**: Set up GitHub Actions to automatically run the test suite and static analysis on every push and pull request.
- **Status**: Planned
