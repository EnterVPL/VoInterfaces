<?php

declare(strict_types=1);

namespace EnterV\Voi\Helper;

use EnterV\Voi\IntegerVoInterface;

final class IntegerVoHelper
{
    private function __construct()
    {
    }

    public static function getNumber(int|IntegerVoInterface $value): int
    {
        if ($value instanceof IntegerVoInterface) {
            $value = $value->value();
        }

        return $value;
    }
}
