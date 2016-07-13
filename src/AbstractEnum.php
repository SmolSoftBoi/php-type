<?php

namespace EpicKris\Type;

/**
 * Abstract enum type.
 *
 * @package EpicKris\Type
 */
class AbstractEnum extends AbstractType implements EnumInterface
{
    /**
     * Get constants list.
     *
     * @param bool $includeDefault Include default.
     *
     * @return array                     Returns constants.
     * @throws \InvalidArgumentException If $includeDefault argument is not a boolean.
     */
    public function getConstList($includeDefault = false)
    {
        if (! is_bool($includeDefault)) {
            throw new \InvalidArgumentException('Include default argument must be a boolean.');
        }

        $reflection = new \ReflectionClass($this);
        $constants = $reflection->getConstants();

        if (! $includeDefault) {
            unset($constants['__DEFAULT']);
        }

        return $constants;
    }
}
