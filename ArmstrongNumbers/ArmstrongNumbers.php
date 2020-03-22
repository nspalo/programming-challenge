<?php

function IfArmstrongNumber(int $possibleArmstrongNumber = 100): bool
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

$start = 100;
$end = 1000;
echo "Armstrong numbers from {$start} to {$end}\n";

for ($number = $start; $number <= $end; $number++) {
    if (IfArmstrongNumber($number)) {
        echo $number . "\n";
    }
}
