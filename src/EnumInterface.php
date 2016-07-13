<?php

namespace EpicKris\Type;

/**
 * Enum type interface.
 *
 * @package EpicKris\Type
 */
interface EnumInterface extends TypeInterface
{
    /**
     * Get constants list.
     *
     * @param bool $includeDefault Include default.
     *
     * @return array Returns constants.
     */
    public function getConstList($includeDefault = false);
}
