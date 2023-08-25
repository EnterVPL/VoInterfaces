<?php

declare(strict_types=1);

namespace EnterV\VoInterfaces;

interface SacralTypeVoInterface
{
    public function value(): bool|int|float|string;
}
