<?php

namespace ProgrammingChallenge;

use PHPUnit\Framework\TestCase;

abstract class BaseTest extends TestCase
{
    /**
     * @param string $string
     * @param string $result
     */
    protected function displayMessage(string $string, string $result): void
    {
        echo "Result: " . $result . "; Input: `" . $string . "`";
    }
}