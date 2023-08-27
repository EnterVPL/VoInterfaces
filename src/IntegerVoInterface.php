<?php

declare(strict_types=1);

namespace EnterV\Voi;

interface IntegerVoInterface extends SacralTypeVoInterface
{
    public function value(): int;
}
