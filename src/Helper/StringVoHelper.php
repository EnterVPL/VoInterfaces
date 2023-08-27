<?php

declare(strict_types=1);

namespace EnterV\Voi\Helper;

use EnterV\Voi\StringVoInterface;

final class StringVoHelper
{
    private function __construct()
    {
    }

    public static function getString(string|StringVoInterface $value): string
    {
        if ($value instanceof StringVoInterface) {
            $value = $value->value();
        }

        return $value;
    }

    public static function concat(StringVoInterface $main, string|StringVoInterface $toAdd): StringVoInterface
    {
        return $main->concat($toAdd);
    }
}
