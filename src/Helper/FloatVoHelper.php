<?php

declare(strict_types=1);

namespace EnterV\Voi\Helper;

use EnterV\Voi\FloatVoInterface;

final class FloatVoHelper
{
    private function __construct()
    {
    }

    public static function getNumber(int|FloatVoInterface $value): int
    {
        if ($value instanceof FloatVoInterface) {
            $value = $value->value();
        }

        return $value;
    }
}
