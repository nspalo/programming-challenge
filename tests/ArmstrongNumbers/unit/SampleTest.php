<?php

namespace ArmstrongNumbers\unit;

use PHPUnit\Framework\TestCase;

/**
 * Class SampleTest
 * @package ArmstrongNumbers\unit
 */
class SampleTest extends TestCase
{
    /**
     * testAssetValueToBeTrue
     */
    public function testAssetValueToBeTrue()
    {
        $this->assertTrue(true);
    }

    /**
     * testAssetValueToBeEqual
     */
    public function testAssetValueToBeEqual()
    {
        $this->assertEquals(true, true);
    }
}