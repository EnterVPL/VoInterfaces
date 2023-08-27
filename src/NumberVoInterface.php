<?php

declare(strict_types=1);

namespace EnterV\Voi;

interface NumberVoInterface extends SacralTypeVoInterface
{
    public function value(): int|float;
}
