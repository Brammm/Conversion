<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Ounce implements UnitInterface
{
    const SYMBOL = 'oz';

    public function toBase()
    {
        return 28.35;
    }

    public function fromBase()
    {
        return 0.03527;
    }
}