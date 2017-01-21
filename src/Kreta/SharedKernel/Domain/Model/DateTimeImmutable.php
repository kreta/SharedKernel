<?php

/*
 * This file is part of the Kreta package.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Kreta\SharedKernel\Domain\Model;

final class DateTimeImmutable
{
    public static function now() : \DateTimeImmutable
    {
        return new \DateTimeImmutable();
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }
}
