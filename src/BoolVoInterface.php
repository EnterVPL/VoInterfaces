<?php

declare(strict_types=1);

namespace EnterV\Voi;

interface BoolVoInterface extends SacralTypeVoInterface
{
    public function value(): bool;

    public function or(self|bool $value): self;

    public function and(self|bool $value): self;
}
