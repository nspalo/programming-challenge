<?php

namespace ArmstrongNumbers\unit;

use ArmstrongNumbers\ArmstrongNumber;
use PHPUnit\Framework\TestCase;

/**
 * Class TestArmstrongNumbers
 * @package ArmstrongNumbers\unit
 */
class TestArmstrongNumbers extends TestCase
{
    /**
     * @var ArmstrongNumber
     */
    private ArmstrongNumber $armstrongNumber;

    /**
     * @param $number
     * @param $result
     */
    private function displayMessage($number, $result): void
    {
        echo "$number is " . (($result) ? "an" : "not an") . " Armstrong Number";
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
        $this->armstrongNumber = new ArmstrongNumber();
    }

    /**
     * @test
     * Test Number 100
     */
    public function EvaluateNumber_100_False(): void
    {
        $number = 100;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        $this->displayMessage($number, $result);
        self::assertFalse($result);
    }

    /**
     * Test Number 153
     */
    public function test_EvaluateNumber_153_True(): void
    {
        $number = 153;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        $this->displayMessage($number, $result);
        self::assertTrue($result);
    }

    /**
     * Test Number 370
     */
    public function test_EvaluateNumber_370_True(): void
    {
        $number = 370;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        $this->displayMessage($number, $result);
        self::assertTrue($result);
    }

    /**
     * Test Number 1634
     */
    public function test_EvaluateNumber_1634_True(): void
    {
        $number = 1634;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        $this->displayMessage($number, $result);
        self::assertTrue($result);
    }


    /**
     * Test Number 2021
     */
    public function test_EvaluateNumber_2021_False(): void
    {
        $number = 2021;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        $this->displayMessage($number, $result);
        self::assertFalse($result);
    }
}