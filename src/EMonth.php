<?php
declare(strict_types=1);

namespace Enums;

/**
 * Class EMonth
 * @method static EMonth JANUARY()
 * @method static EMonth FEBRUARY()
 * @method static EMonth MARCH()
 * @method static EMonth APRIL()
 * @method static EMonth MAY()
 * @method static EMonth JUNE()
 * @method static EMonth JULY()
 * @method static EMonth AUGUST()
 * @method static EMonth SEPTEMBER()
 * @method static EMonth OCTOBER()
 * @method static EMonth NOVEMBER()
 * @method static EMonth DECEMBER()
 */
class EMonth extends Enum
{
    private const JANUARY   = 0;
    private const FEBRUARY  = 1;
    private const MARCH     = 2;
    private const APRIL     = 3;
    private const MAY       = 4;
    private const JUNE      = 5;
    private const JULY      = 6;
    private const AUGUST    = 7;
    private const SEPTEMBER = 8;
    private const OCTOBER   = 9;
    private const NOVEMBER  = 10;
    private const DECEMBER  = 11;

    public function getValue(): int
    {
        return $this->value;
    }
}