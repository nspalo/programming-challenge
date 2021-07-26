<?php

declare(strict_types=1);

namespace ProgrammingChallenge\ArmstrongNumbers\unit;

use PHPUnit\Framework\TestCase;
use ProgrammingChallenge\ArmstrongNumbers\ArmstrongNumber;

/**
 * @package \ArmstrongNumbers\unit
 * @covers \ProgrammingChallenge\ArmstrongNumbers\ArmstrongNumber
 */
final class ArmstrongNumberTest extends TestCase
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
     * Test Number 100
     */
    public function testShouldEvaluateFalseOn100(): void
    {
        $number = 100;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        self::assertFalse($result);
    }

    /**
     * Test Number 153
     */
    public function testShouldEvaluateTrueOn153(): void
    {
        $number = 153;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        self::assertTrue($result);
    }

    /**
     * Test Number 370
     */
    public function testShouldEvaluateTrueOn370(): void
    {
        $number = 370;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        self::assertTrue($result);
    }

    /**
     * Test Number 1634
     */
    public function testShouldEvaluateTrueOn1634(): void
    {
        $number = 1634;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        self::assertTrue($result);
    }


    /**
     * Test Number 2021
     */
    public function testShouldEvaluateFalseOn2021(): void
    {
        $number = 2021;
        $result = $this->armstrongNumber->isArmstrongNumber($number);

        self::assertFalse($result);
    }
}
