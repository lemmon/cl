<?php

namespace Lemmon\Cl\Tests;

use PHPUnit\Framework\TestCase;

class ClTest extends TestCase
{
    public function testClFunctionExists()
    {
        $this->assertTrue(function_exists('cl'), 'cl() function should be available');
    }
}
