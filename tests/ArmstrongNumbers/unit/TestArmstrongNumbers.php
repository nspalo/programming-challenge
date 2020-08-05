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
    private $armstrongNumber;

    /**
     * @param $number
     * @param $result
     */
    private function displayMessage($number, $result)
    {
        echo "$number is " . ( ($result) ? "an" : "not an" ) . " Armstrong Number";
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
    public function EvaluateNumber_100_False()
    {
        $number = 100;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        $this->displayMessage($number, $result);
        $this->assertFalse($result);
    }

    /**
     * Test Number 153
     */
    public function test_EvaluateNumber_153_True()
    {
        $number = 153;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        $this->displayMessage($number, $result);
        $this->assertTrue($result);
    }

    /**
     * Test Number 370
     */
    public function test_EvaluateNumber_370_True()
    {
        $number = 370;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        $this->displayMessage($number, $result);
        $this->assertTrue($result);
    }

    /**
     * Test Number 1634
     */
    public function test_EvaluateNumber_1634_True()
    {
        $number = 1634;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        $this->displayMessage($number, $result);
        $this->assertTrue($result);
    }
}