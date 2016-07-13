<?php

namespace EpicKris\Type;

/**
 * Type interface.
 *
 * @package EpicKris\Type
 */
interface TypeInterface
{
    /**
     * Default.
     */
    const __DEFAULT = null;

    /**
     * Type constructor.
     *
     * @param mixed $initialValue Initial value.
     * @param bool  $strict       Strict.
     */
    public function __construct($initialValue = self::__DEFAULT, $strict = true);
}
