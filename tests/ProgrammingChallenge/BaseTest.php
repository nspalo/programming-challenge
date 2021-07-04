<?php

namespace ProgrammingChallenge;

use PHPUnit\Framework\TestCase;

abstract class BaseTest extends TestCase
{
    /**
     * @param $string
     * @param $result
     */
    protected function displayMessage($string, $result): void
    {
        echo "Result: " . (int)$result . "; Input: `" . $string . "`";
    }
}