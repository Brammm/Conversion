<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Microgram implements UnitInterface
{
    const SYMBOL = 'ug';

    public function toBase()
    {
        return 0.000001;
    }

    public function fromBase()
    {
        return 1000000;
    }
}