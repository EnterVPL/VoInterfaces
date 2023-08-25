<?php

namespace EnterV\VoInterfaces;

declare(strict_types=1);

interface SacralTypeVoInterface
{
    public function value(): bool|int|float|string;
}
