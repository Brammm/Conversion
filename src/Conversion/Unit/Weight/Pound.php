<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Pound implements UnitInterface
{
    const SYMBOL = 'lb';

    public function toBase($value)
    {
        return $value * 453.6;
    }

    public function fromBase($value)
    {
        return $value * 0.002205;
    }
}