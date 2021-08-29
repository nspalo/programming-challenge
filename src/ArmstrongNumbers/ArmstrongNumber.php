<?php

declare(strict_types=1);

namespace ProgrammingChallenge\ArmstrongNumbers;

/**
 * Class ArmstrongNumber
 * @package ArmstrongNumbers
 */
final class ArmstrongNumber
{
    public function isArmstrongNumber(int $possibleArmstrongNumber = 100): bool
    {
        $sumOfCubeOfDigits = \array_sum(
            \array_map(
                static function (int $digit) use ($possibleArmstrongNumber) {
                    return $digit ** \strlen((string) $possibleArmstrongNumber);
                },
                \str_split((string) $possibleArmstrongNumber)
            )
        );

        return $sumOfCubeOfDigits === $possibleArmstrongNumber;
    }
}
