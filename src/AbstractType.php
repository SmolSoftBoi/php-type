<?php

namespace EpicKris\Type;

/**
 * Abstract type.
 *
 * @package EpicKris\Type
 */
abstract class AbstractType implements TypeInterface
{
    /**
     * Default.
     */
    const __DEFAULT = null;

    /**
     * @var mixed Value.
     */
    protected $value;

    /**
     * Type constructor.
     *
     * @param mixed $initialValue Initial value.
     * @param bool  $strict       Strict.
     *
     * @throws \InvalidArgumentException If $strict argument is not a boolean.
     */
    public function __construct($initialValue = self::__DEFAULT, $strict = true)
    {
        if (! is_bool($strict)) {
            throw new \InvalidArgumentException('Strict argument must be a boolean.');
        }

        $reflection = new \ReflectionClass($this);
        $constants = $reflection->getConstants();

        $key = array_search($initialValue, $constants, $strict);

        if ($key === false) {
            throw new \UnexpectedValueException('Value not a constant in enum: ' . $reflection->getShortName());
        }

        $this->value = $constants[$key];
    }

    /**
     * To string.
     *
     * @return string Returns string.
     */
    public function __toString()
    {
        return (string) $this->value;
    }
}
