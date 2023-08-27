<?php

declare(strict_types=1);

namespace EnterV\Voi\Traits;

use EnterV\Voi\BoolVoInterface;
use EnterV\Voi\Helper\BoolVoHelper;

trait BoolVoOperationsTrait
{
    public function or(BoolVoInterface|bool $value): BoolVoInterface
    {
        $value = BoolVoHelper::getBool($value);

        return new static($this->value() || $value);
    }

    public function and(BoolVoInterface|bool $value): BoolVoInterface
    {
        $value = BoolVoHelper::getBool($value);

        return new static($this->value() && $value);
    }
}
