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
        $cloner = new VarCloner();
        $dumper = new class extends CliDumper {
            protected function supportsColors(): bool
            {
                $outputStream = $this->outputStream;
                $this->outputStream = fopen('php://stdout', 'w');

                try {
                    return parent::supportsColors();
                } finally {
                    $this->outputStream = $outputStream;
                }
            }
        };

        $dumper->dump($cloner->cloneVar($data));
    }
}
