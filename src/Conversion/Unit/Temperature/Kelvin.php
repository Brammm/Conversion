<?php

namespace Conversion\Unit\Temperature;

use Conversion\Unit\UnitInterface;

class Kelvin implements UnitInterface
{

    const SYMBOL = 'K';

    /**
     * The calculation needed to get to a base value
     *
     * @return float
     */
    public function toBase($value)
    {
        return $value + 273.15;
    }

    /**
     * The calculation needed to go from base value to unit
     *
     * @return float
     */
    public function fromBase($value)
    {
        return $value - 273.15;
    }
}