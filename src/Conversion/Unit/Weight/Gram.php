<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Gram implements UnitInterface
{
    const SYMBOL = 'g';

    public function toBase($value)
    {
        return $value;
    }

    public function fromBase($value)
    {
        return $value;
    }
}