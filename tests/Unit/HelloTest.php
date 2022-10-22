<?php

declare(strict_types=1);

namespace Sikessem\Package\Test\Unit;

use Sikessem\Package\Hello;

it('should output hello', function () {
    expect(Hello::toYou(''))
    ->toEqual('Hello !');

    expect(Hello::toYou())
    ->toEqual('Hello World!');

    expect(Hello::toYou('SIKessEm'))
    ->toEqual('Hello SIKessEm!');
});
