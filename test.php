<?php

declare(strict_types=1);

require_once('vendor/autoload.php');

use EnterV\Voi\BoolVoInterface;

class BoolType implements BoolVoInterface
{
    public function value(): bool
    {
        return true;
    }
}
$a = new BoolType();

echo $a->value() ? "true" : "false";
