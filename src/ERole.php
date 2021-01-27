<?php
declare(strict_types=1);

namespace Enums;

/**
 * Class ERole
 * @method static ERole USER()
 * @method static ERole ADMIN()
 */
class ERole extends Enum
{
    private const USER=1;
    private const ADMIN=2;

    public function getValue(): int
    {
        return $this->value;
    }
}