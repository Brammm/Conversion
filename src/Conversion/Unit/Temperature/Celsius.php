<?php

namespace Conversion\Unit\Temperature;

use Conversion\Unit\UnitInterface;

class Celsius implements UnitInterface
{
    const SYMBOL = 'C';

    /**
     * The calculation needed to get to a base value
     *
     * @return float
     */
    public function toBase($value)
    {
        return $value;
    }

    /**
     * The calculation needed to go from base value to unit
     *
     * @return float
     */
    public function fromBase($value)
    {
        return $value;
    }
}