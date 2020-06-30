<?php

namespace Weissheiten\CIDemo;

/**
 * Class Dice Class for a simple die with an arbitrary number of sides
 */
class Dice{

    /**
     * @var int number of sides on the die
     */
    private int $sides;

    /**
     * Dice constructor.
     * @param int $sides number of sides for the die
     */
    public function __construct(int $sides){
        $this->sides = $sides*2;
    }

    /**
     * @return float The statistically expected value on a throw of this die
     */
    public function getExpectedValue() : float{
        return (1+$this->sides)/2;
    }
}