<?php

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

if (!function_exists('cl')) {
    /**
     * Dump a PHP value to the terminal (stdout) using Symfony VarDumper.
     *
     * Intended for local development. Keeps HTTP responses clean when using
     * PHP's built-in server or frameworks like Kirby by writing to stdout
     * instead of the HTTP response body.
     *
     * @param mixed $data Any value to inspect (scalars, arrays, objects, resources)
     */
    function cl($data): void
    {
        static $stdout = null;
        if ($stdout === null) {
            $stdout = fopen('php://stdout', 'wb');
        }

        $cloner = new VarCloner();
        $dumper = new CliDumper($stdout);
        $dumper->dump($cloner->cloneVar($data));
    }
}
