<?php
declare(strict_types=1);

namespace Enums;


use JsonSerializable;
use ReflectionClass;
use UnexpectedValueException;

class Enum implements JsonSerializable
{
//    protected string $name;
//    protected $value;

    public function __construct(
        protected string $name,
        protected $value
    )
    {
//        $this->name = $name;
//        $this->value = $value;
    }

    public static function __callStatic(string $name, array $arguments): self
    {
        return new static($name, self::getConstantValue($name));
    }

    private static function getConstants(): array
    {
        $oClass = new ReflectionClass(static::class);
        return $oClass->getConstants();
    }

    private static function getConstantValue(string $name)
    {
        $constants = self::getConstants();
        return $constants[$name] ?? throw new UnexpectedValueException("Enum entry <$name> not defined in " . static::class);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->name . '(' . $this->value . ')';
    }

    public function jsonSerialize()
    {
        return $this->__toString();
    }
}