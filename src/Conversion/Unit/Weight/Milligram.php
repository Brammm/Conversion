<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Milligram implements UnitInterface
{
    const SYMBOL = 'mg';

    public function toBase()
    {
        return 0.001;
    }

    public function fromBase()
    {
        return 1000;
    }
}