<?php

namespace Lemmon\Cl\Tests;

use PHPUnit\Framework\TestCase;

class ClTest extends TestCase
{
    public function testClFunctionExists(): void
    {
        $this->assertTrue(function_exists('cl'), 'cl() function should be available');
    }

    public function testClReturnsSingleValueUnchanged(): void
    {
        $data = ['hello' => 'world'];

        $this->assertSame($data, \cl($data));
    }

    public function testClReturnsAllValuesAsArrayForMultipleArguments(): void
    {
        $this->assertSame(['first', 'second', 'third'], \cl('first', 'second', 'third'));
    }
}
