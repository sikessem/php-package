<?php

declare(strict_types=1);

namespace Sikessem\Package\Test\Feat;

use RuntimeException;

test('throws runtime exception when autoload file is required', function () {
    require_once dirname(__DIR__, 2).'/autoload.php';
})->throws(RuntimeException::class, 'The '.realpath(dirname(__DIR__, 2).'/vendor/autoload.php)'.'file has already been included.'));
