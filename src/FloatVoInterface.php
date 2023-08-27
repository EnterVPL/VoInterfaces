<?php

declare(strict_types=1);

namespace EnterV\Voi;

interface FloatVoInterface extends SacralTypeVoInterface
{
    public function value(): float;
}
