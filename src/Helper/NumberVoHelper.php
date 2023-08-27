<?php

declare(strict_types=1);

namespace EnterV\Voi\Helper;

use EnterV\Voi\NumberVoInterface;

final class NumberVoHelper
{
    private function __construct()
    {
    }

    public static function getNumber(int|float|NumberVoInterface $value): int|float
    {
        if ($value instanceof NumberVoInterface) {
            $value = $value->value();
        }

        return $value;
    }
}
