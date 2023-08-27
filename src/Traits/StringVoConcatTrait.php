<?php

declare(strict_types=1);

namespace EnterV\Voi\Traits;

use EnterV\Voi\Helper\StringVoHelper;
use EnterV\Voi\StringVoInterface;

trait StringVoConcatTrait
{
    public function concat(string|StringVoInterface $value): StringVoInterface
    {
        $value = StringVoHelper::getString($value);

        return new static($this->value().$value);
    }
}
