<?php

namespace ProgrammingChallenge\ArmstrongNumbers;

/**
 * Class ArmstrongNumber
 * @package ArmstrongNumbers
 */
class ArmstrongNumber
{
    /**
     * @param int $possibleArmstrongNumber
     * @return bool
     */
    public function isArmstrongNumber(int $possibleArmstrongNumber = 100): bool
    {
        $sumOfCubeOfDigits = array_sum(
            array_map(
                function ($digit) use($possibleArmstrongNumber){
                    return pow($digit,strlen((string)$possibleArmstrongNumber));
                },
                str_split((string)$possibleArmstrongNumber)
            )
        );

        return ($sumOfCubeOfDigits === $possibleArmstrongNumber) ? true : false;
    }
}