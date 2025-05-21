<?php

require __DIR__ . '/../vendor/autoload.php';

// Set content type to plain text
header('Content-Type: text/plain');

// Output the message
echo "Look at your console.\n";
echo "This example demonstrates the cl() function with various data types.\n";

// Demonstrate cl() with some example data
$exampleData = [
    'string' => 'Hello World',
    'number' => 42,
    'array' => ['apple', 'banana', 'orange'],
    'object' => (object)['name' => 'John', 'age' => 30],
    'nested' => [
        'level1' => [
            'level2' => [
                'level3' => 'Deep nested value'
            ]
        ]
    ]
];

cl($exampleData);
