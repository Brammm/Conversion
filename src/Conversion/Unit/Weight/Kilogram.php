<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Kilogram implements UnitInterface
{
    const SYMBOL = 'kg';

    public function toBase()
    {
        return 1000;
    }

    public function fromBase()
    {
        return 0.001;
    }
}