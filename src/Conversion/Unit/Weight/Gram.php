<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Gram implements UnitInterface
{
    const SYMBOL = 'g';

    public function toBase()
    {
        return 1;
    }

    public function fromBase()
    {
        return 1;
    }
}