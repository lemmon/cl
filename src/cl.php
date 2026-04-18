<?php

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

if (!function_exists('cl')) {
    /**
     * Dump one or more PHP values to the terminal (stdout) using Symfony VarDumper.
     *
     * Intended for local development. Keeps HTTP responses clean when using
     * PHP's built-in server or frameworks like Kirby by writing to stdout
     * instead of the HTTP response body.
     *
     * @param mixed    $data          Any value to inspect (scalars, arrays, objects, resources)
     * @param mixed ...$additional    Additional values to inspect
     *
     * @return mixed|array<int, mixed> The value when one argument is passed, otherwise all values as an array
     */
    function cl($data, ...$additional)
    {
        static $stdout = null;
        static $cloner = null;
        static $dumper = null;
        if ($stdout === null) {
            $stdout = fopen('php://stdout', 'wb');
            $cloner = new VarCloner();
            $dumper = new CliDumper($stdout);
        }

        if ($additional === []) {
            $dumper->dump($cloner->cloneVar($data));

            return $data;
        }

        $values = [$data, ...$additional];
        foreach ($values as $index => $value) {
            $dumper->dump(
                $cloner->cloneVar($value)->withContext(['label' => (string) ($index + 1)])
            );
        }

        return $values;
    }
}
