<?php

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

if (!function_exists('cl')) {
    /**
     * Dumps data to console using Symfony VarDumper
     *
     * @param mixed $data The data to dump
     * @return void
     */
    function cl($data)
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
