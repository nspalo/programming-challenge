<?php

declare(strict_types=1);

namespace ProgrammingChallenge\Distincts;

/**
 * Class Distinct
 * @package Distinct
 */
final class Distinct
{
    /**
     * @param array<int> $numbers
     */
    public function solution(array $numbers): int
    {
        // Array of distinct number
        $distinctNumbers = [];

        // Loop through each number in the array
        foreach ($numbers as $number) {
            /**
             * Check if it's already in the array of distinct numbers
             * insert the number if it's not found, otherwise ignore
             */
            if (\in_array($number, $distinctNumbers, true) === false) {
                $distinctNumbers[] = $number;
            }
        }

        // count the items in the array
        return \count($distinctNumbers);
    }
}
