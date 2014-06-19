<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Milligram implements UnitInterface
{
    const SYMBOL = 'mg';

    public function toBase($value)
    {
        return $value * 0.001;
    }

    public function fromBase($value)
    {
        return $value * 1000;
    }
}