<?php

namespace ProgrammingChallenge\ArmstrongNumbers\unit;

use ProgrammingChallenge\ArmstrongNumbers\ArmstrongNumber;
use ProgrammingChallenge\BaseTest;

/**
 * Class TestArmstrongNumbers
 * @package ArmstrongNumbers\unit
 * @covers \ProgrammingChallenge\ArmstrongNumbers\ArmstrongNumber
 */
class ArmstrongNumbersTest extends BaseTest
{
    /**
     * @var ArmstrongNumber
     */
    private ArmstrongNumber $armstrongNumber;

    protected function setUp(): void
    {
        parent::setUp();

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