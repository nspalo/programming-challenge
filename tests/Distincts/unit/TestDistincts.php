<?php

namespace Distincts\unit;

use Distincts\Distinct;
use PHPUnit\Framework\TestCase;

/**
 * Class TestArmstrongNumbers
 * @package ArmstrongNumbers\unit
 */
class TestDistincts extends TestCase
{
    /**
     * @var Distinct
     */
    private Distinct $distinct;

    /**
     * @param array $numbers
     * @param $result
     */
    private function displayMessage($numbers, $result): void
    {
        echo "Distinct values: " . $result . "; A[" . implode(",", $numbers) . "]";
    }

    /**
     * TestArmstrongNumbers constructor.
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
        $this->distinct = new Distinct();
    }

    /**
     * @test
     * array values: 2, 1, 1, 2, 3, 1
     */
    public function EvaluateDistinctValues_test0(): void
    {
        $numbers = [2, 1, 1, 2, 3, 1];
        $result = $this->distinct->solution($numbers);
        $expected = 3;

        $this->displayMessage($numbers, $result);
        self::assertEquals($expected, $result);
    }


    /**
     * @test
     * array values: 7, 7, 1, 2, 3, 1, 3, 4, 2
     */
    public function EvaluateDistinctValues_test1(): void
    {
        $numbers = [7, 7, 1, 2, 3, 1, 3, 4, 2];
        $result = $this->distinct->solution($numbers);
        $expected = 5;

        $this->displayMessage($numbers, $result);
        self::assertEquals($expected, $result);
    }


    /**
     * @test
     * array values: 2,7,2,2,8,8,9,9,2
     */
    public function EvaluateDistinctValues_test2(): void
    {
        $numbers = [2, 7, 2, 2, 8, 8, 9, 9, 2];
        $result = $this->distinct->solution($numbers);
        $expected = 4;

        $this->displayMessage($numbers, $result);
        self::assertEquals($expected, $result);
    }
}