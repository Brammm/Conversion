<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Ounce implements UnitInterface
{
    const SYMBOL = 'oz';

    public function toBase($value)
    {
        return $value * 28.35;
    }

    public function fromBase($value)
    {
        return $value * 0.03527;
    }
}