<?php

namespace Brackets\unit;

use PHPUnit\Framework\TestCase;
use Brackets\Bracket;

/**
 * Class TestBrackets
 * @package Brackets\unit
 */
class TestBrackets extends TestCase
{
    /**
     * @var Bracket
     */
    private Bracket $bracket;

    /**
     * @param $string
     * @param $result
     */
    private function displayMessage($string, $result): void
    {
        // echo (int)$result . " - `" . $string . "` -> is" . (($result) ? " " : " not ") . "properly nested.";
        echo "Result: " . (int)$result . "; Input: `" . $string . "`";
    }

    /**
     * TestBrackets constructor.
     * @param null $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

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