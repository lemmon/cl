## Unreleased

## v1.2.0 - 2026-04-18

[Compare v1.1.0...v1.2.0](https://github.com/lemmon/cl/compare/v1.1.0...v1.2.0)

### Features

- Support dumping multiple values in one `cl()` call.
- Return dumped values from `cl()` for inline usage (single value when one argument is passed, array of values otherwise).
- Cache the `VarCloner` and `CliDumper` instances across calls to avoid re-instantiation.

### Tests

- Add coverage for return values with single and multiple arguments.

## v1.1.0 - 2025-08-13

[Compare v1.0.0...v1.1.0](https://github.com/lemmon/cl/compare/v1.0.0...v1.1.0)

### Features

- Dump to stdout to keep HTTP responses clean; add return type and docblock; remove color-detection override ([f4560ac](https://github.com/lemmon/cl/commit/f4560ac))

### Documentation

- Improve cl() function documentation for clarity and usage ([b92e55e](https://github.com/lemmon/cl/commit/b92e55e))
- Enhance README with visual and detailed benefits ([6303845](https://github.com/lemmon/cl/commit/6303845))

## v1.0.0 - 2025-05-21

Initial release.
