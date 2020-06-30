<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Weissheiten\CIDemo\Dice;

final class DiceExpectedValueTest extends TestCase
{
    /**
     * Tests the expectedValue of a six sided die (aka D6)
     */
    public function testExpectedValueD6(): void
    {
        $d6 = new Dice(6);
        $this->assertEquals(
            3.5,
            $d6->getExpectedValue()
        );
    }
}