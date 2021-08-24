<?php

declare(strict_types=1);

namespace Tests\Brackets;

use PHPUnit\Framework\TestCase;
use ProgrammingChallenge\Brackets\Bracket;

/**
 * @covers \ProgrammingChallenge\Brackets\Bracket
 * @group  Brackets
 */
final class BracketTest extends TestCase
{
    /**
     * @return iterable<string, mixed>
     */
    public function providesData(): iterable
    {
        yield 'Test nested brackets is empty' => [
            '',
            true,
        ];

        yield 'Test nested brackets is {' => [
            '{',
            false,
        ];

        yield 'Test nested brackets []' => [
            '[]',
            true,
        ];

        yield 'Test nested brackets [])' => [
            '[])',
            false,
        ];

        yield 'Test nested brackets {[[)(]]}' => [
            '{[()()]}',
            true,
        ];

        yield 'Test nested brackets []()[' => [
            '([)()]',
            false,
        ];

        yield 'Test nested brackets {[)(]{(}{)}}' => [
            '{[)(]{(}{)}}',
            true,
        ];

        yield 'Test nested brackets [{}([]{})[{()}]]' => [
            '[{}([]{})[{()}]]',
            true,
        ];

        yield 'Test nested brackets [(][){}(])' => [
            '[(][){}(])',
            false,
        ];

        yield 'Test nested brackets ))((' => [
            '))((',
            true,
        ];
    }

    /**
     * @dataProvider providesData
     */
    public function testSolution(string $brackets, bool $expectedResult): void
    {
        $bracket = new Bracket();

        self::assertSame($expectedResult, $bracket->solution($brackets));
    }
}
