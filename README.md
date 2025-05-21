# CL - Simple PHP Console Logger

A simple PHP console logger for local development and debugging, providing beautiful and detailed variable inspection. Particularly useful when working with PHP's built-in development server.

## Installation

```bash
composer require lemmon/cl
```

## Usage

```php
<?php

require 'vendor/autoload.php';

// Dump any variable to console
$data = ['hello' => 'world'];
cl($data);

// Works with any PHP type
cl(new stdClass());
cl(42);
cl("Hello World");
```

> **Note:** This library is a wrapper around Symfony's [VarDumper](https://symfony.com/doc/current/components/var_dumper.html) component. Any variable that VarDumper can handle will work perfectly with this library.

## Features

- Beautiful console output with syntax highlighting
- Detailed variable inspection
- Works with any PHP type
- Zero configuration needed
- Lightweight and simple to use

## Requirements

- PHP 7.4 or higher

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).
