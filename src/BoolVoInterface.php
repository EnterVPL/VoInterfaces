<?php

declare(strict_types=1);

namespace EnterV\Voi;

interface BoolVoInterface extends SacralTypeVoInterface
{
    public function value(): bool;
}
