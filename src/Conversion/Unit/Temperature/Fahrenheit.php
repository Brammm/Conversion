<?php

namespace Conversion\Unit\Temperature;

use Conversion\Unit\UnitInterface;

class Fahrenheit implements UnitInterface
{

    const SYMBOL = 'F';

    /**
     * The calculation needed to get to a base value
     *
     * @param $value
     *
     * @return float
     */
    public function toBase($value)
    {
        // Deduct 32, then multiply by 5, then divide by 9
        return ($value - 32) * 5 / 9;
    }

    /**
     * The calculation needed to go from base value to unit
     *
     * @param $value
     *
     * @return float
     */
    public function fromBase($value)
    {
        // Multiply by 9, then divide by 5, then add 32
        return ($value * 9 / 5) + 32;
    }
}