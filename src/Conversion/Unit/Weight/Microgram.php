<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Microgram implements UnitInterface
{
    const SYMBOL = 'ug';

    public function toBase($value)
    {
        return $value * 0.000001;
    }

    public function fromBase($value)
    {
        return $value * 1000000;
    }
}