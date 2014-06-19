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
     * @param $value
     *
     * @return float
     */
    public function toBase($value);

    /**
     * The calculation needed to go from base value to unit
     *
     * @param $value
     *
     * @return float
     */
    public function fromBase($value);
}