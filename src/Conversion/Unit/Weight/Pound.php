<?php

namespace Conversion\Unit\Weight;

use Conversion\Unit\UnitInterface;

class Pound implements UnitInterface
{
    const SYMBOL = 'lb';

    public function toBase()
    {
        return 453.6;
    }

    public function fromBase()
    {
        return 0.002205;
    }
}