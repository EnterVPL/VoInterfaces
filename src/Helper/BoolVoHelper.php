<?php

declare(strict_types=1);

namespace EnterV\Voi\Helper;

use EnterV\Voi\BoolVoInterface;

final class BoolVoHelper
{
    private function __construct()
    {
    }

    public static function getBool(bool|BoolVoInterface $value): bool
    {
        if ($value instanceof BoolVoInterface) {
            $value = $value->value();
        }

        return $value;
    }
}
