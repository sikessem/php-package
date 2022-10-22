<?php

declare(strict_types=1);

namespace Sikessem\Package;

final class Hello
{
    public static function toYou(string $name = 'World'): string
    {
        return "Hello $name!";
    }
}
