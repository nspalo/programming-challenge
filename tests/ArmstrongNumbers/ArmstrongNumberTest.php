<?php

declare(strict_types=1);

namespace Tests\ArmstrongNumbers;

use PHPUnit\Framework\TestCase;
use ProgrammingChallenge\ArmstrongNumbers\ArmstrongNumber;

/**
 * @covers \ProgrammingChallenge\ArmstrongNumbers\ArmstrongNumber
 * @group  ArmstrongNumbers
 */
final class ArmstrongNumberTest extends TestCase
{
    /**
     * @return iterable<string, mixed>
     * @see testSolution
     */
    public function providesData(): iterable
    {
        yield 'Test Number 100' => [
            100,
            false,
        ];

        yield 'Test Number 153' => [
            153,
            true,
        ];

        yield 'Test Number 370' => [
            370,
            true,
        ];

        yield 'Test Number 1634' => [
            1634,
            true,
        ];

        yield 'Test Number 2021' => [
            2021,
            false,
        ];
    }

    /**
     * @dataProvider providesData
     */
    public function testSolution(int $number, bool $expectedResult): void
    {
        $armstrongNumber = new ArmstrongNumber();
        self::assertSame($expectedResult, $armstrongNumber->isArmstrongNumber($number));
    }
}
