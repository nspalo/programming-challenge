<?php

declare(strict_types=1);

namespace Tests\Distincts;

use PHPUnit\Framework\TestCase;
use ProgrammingChallenge\Distincts\Distinct;

/**
 * @covers \ProgrammingChallenge\Distincts\Distinct
 * @group  Distincts
 */
final class DistinctTest extends TestCase
{
    /**
     * @return iterable<string, mixed>
     */
    public function providesData(): iterable
    {
        yield 'array values: 2, 1, 1, 2, 3, 1' => [
            [2, 1, 1, 2, 3, 1],
            3,
        ];

        yield 'array values: 7, 7, 1, 2, 3, 1, 3, 4, 2' => [
            [7, 7, 1, 2, 3, 1, 3, 4, 2],
            5,
        ];

        yield 'array values: 2, 7, 2, 2, 8, 8, 9, 9, 2' => [
            [2, 7, 2, 2, 8, 8, 9, 9, 2],
            4,
        ];
    }

    /**
     * @dataProvider providesData
     *
     * @param  int[]  $numbers
     */
    public function testSolution(array $numbers, int $expectedResult): void
    {
        $distinct = new Distinct();

        self::assertSame($expectedResult, $distinct->solution($numbers));
    }
}
