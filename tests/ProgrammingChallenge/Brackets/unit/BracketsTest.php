<?php

namespace ProgrammingChallenge\Brackets\unit;

use ProgrammingChallenge\BaseTest;
use ProgrammingChallenge\Brackets\Bracket;

/**
 * Class TestBrackets
 * @package Brackets\unit
 */
class BracketsTest extends BaseTest
{
    /**
     * @var Bracket
     */
    private Bracket $bracket;

    public function setUp(): void
    {
        parent::setUp();

        /**
         * Initialize the ArmstrongNumber Class
         */
        $this->bracket = new Bracket();
    }

    /**
     * @test
     * Test nested brackets is empty
     */
    public function EvaluateNestedBrackets_test0(): void
    {
        $brackets = "";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage($brackets, $result);
        self::assertTrue($result);
    }

    /**
     * @test
     * Test nested brackets is {
     */
    public function EvaluateNestedBrackets_test1(): void
    {
        $brackets = "{";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage($brackets, $result);
        self::assertFalse($result);
    }

    /**
     * @test
     * Test nested brackets []
     */
    public function EvaluateNestedBrackets_test2(): void
    {
        $brackets = "[]";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage($brackets, $result);
        self::assertTrue($result);
    }

    /**
     * @test
     * Test nested brackets [])
     */
    public function EvaluateNestedBrackets_test3(): void
    {
        $brackets = "[])";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage($brackets, $result);
        self::assertFalse($result);
    }

    /**
     * @test
     * Test nested brackets {[[)(]]}
     */
    public function EvaluateNestedBrackets_test4(): void
    {
        $brackets = "{[()()]}";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage($brackets, $result);
        self::assertTrue($result);
    }

    /**
     * @test
     * Test nested brackets []()[
     */
    public function EvaluateNestedBrackets_test5(): void
    {
        $brackets = "([)()]";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage($brackets, $result);
        self::assertFalse($result);
    }

    /**
     * @test
     * Test nested brackets {[)(]{(}{)}}
     */
    public function EvaluateNestedBrackets_test6(): void
    {
        $brackets = "{[)(]{(}{)}}";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage($brackets, $result);
        self::assertTrue($result);
    }

    /**
     * @test
     * Test nested brackets [{}([]{})[{()}]]
     */
    public function EvaluateNestedBrackets_test7(): void
    {
        $brackets = "[{}([]{})[{()}]]";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage($brackets, $result);
        self::assertTrue($result);
    }

    /**
     * @test
     * Test nested brackets []()[
     */
    public function EvaluateNestedBrackets_test8(): void
    {
        $brackets = "[]()[";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage($brackets, $result);
        self::assertFalse($result);
    }

    /**
     * @test
     * Test nested brackets [(][){}(])
     */
    public function EvaluateNestedBrackets_test9(): void
    {
        $brackets = "[(][){}(])";
        $result = $this->bracket->solution($brackets);

        $this->displayMessage($brackets, $result);
        self::assertFalse($result);
    }
}