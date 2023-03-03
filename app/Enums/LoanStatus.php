<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class LoanStatus extends Enum
{
    const PENDING = 1;
    const APPROVED = 2;
    const REJECTED = 3;
    const OVER_DUE = 4;
}
