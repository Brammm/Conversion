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
        return $value;
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
        return 1;
    }
}