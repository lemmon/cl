# Repository Guidelines

## Project Structure & Module Organization
Source code lives in `src/cl.php`, which exposes the `cl()` helper and wraps Symfony VarDumper. Acceptance assets such as the console screenshot sit in `assets/`, while runnable examples are under `examples/` (start with `simple-server.php` for a quick manual test). PHPUnit specs are stored in `tests/` and follow the `*Test.php` suffix. Documentation and release notes are kept in `README.md` and `CHANGELOG.md`.

## Build, Test, and Development Commands
Run `composer install` to set up dependencies before any other step. Use `composer example` to launch the built-in PHP server (`php -S localhost:8000`) and inspect real-time dumps in your terminal during manual testing. Execute `composer test` to run the automated suite; the script wraps `vendor/bin/phpunit` and relies on PSR-4 dev autoloading for the `Lemmon\Cl\Tests` namespace. When editing `composer.json`, run `composer normalize` so the manifest stays ordered and the `allow-plugins` block is preserved.

## Coding Style & Naming Conventions
Match the existing PSR-12-style formatting: 4-space indentation, braces on the next line for classes, and trailing commas only where PHP allows. Keep the public surface minimal; `cl()` is the single exported global helper, so name additional functions or classes within the `Lemmon\Cl` namespace using StudlyCaps. Add concise PHPDoc blocks where behaviour is not immediately obvious, especially for helpers touching I/O streams. Stick to ASCII punctuation in code and docs (prefer `--` over em dashes) so diffs stay predictable, and reserve emojis for rare emphasis.

## Testing Guidelines
Write PHPUnit tests that mirror the structure in `tests/ClTest.php`, grouping related assertions per method. Name files with the `*Test.php` suffix and place new suites inside the existing namespace. Favour fast unit tests; if you must touch stdout, abstract the stream so assertions remain deterministic. Aim to cover new branches when altering the dumper lifecycle or stream handling, and verify changes locally with `composer test`.

## Commit & Pull Request Guidelines
Commit messages must follow the Conventional Commits spec (e.g., `fix:`, `refactor:`, `docs:`) and keep subjects under 72 characters. Each commit should be scoped to a single concern; tests and implementation can ship together, but unrelated formatting belongs elsewhere. For pull requests, include a short summary, testing notes (`composer test`, `composer normalize --dry-run`, `composer example` if relevant), and link any tracking issues. Add screenshots or terminal captures when they clarify console behaviour changes.
