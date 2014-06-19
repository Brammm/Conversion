<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Kilogram implements UnitInterface
{
    const SYMBOL = 'kg';

    public function toBase($value)
    {
        return $value * 1000;
    }

    public function fromBase($value)
    {
        return $value * 0.001;
    }
}