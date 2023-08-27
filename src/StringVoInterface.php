<?php

declare(strict_types=1);

namespace EnterV\Voi;

interface StringVoInterface extends SacralTypeVoInterface
{
    public function value(): string;
    public function concat(string|StringVoInterface $value): StringVoInterface;
}
