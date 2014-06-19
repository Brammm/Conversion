<?php

namespace Conversion\Unit;

/**
 * Provide value object interface for all units
 *
 * Interface UnitInterface
 */
interface UnitInterface
{

    /**
     * The calculation needed to get to a base value
     *
     * @return float
     */
    public function toBase();

    /**
     * The calculation needed to go from base value to unit
     *
     * @return float
     */
    public function fromBase();
}