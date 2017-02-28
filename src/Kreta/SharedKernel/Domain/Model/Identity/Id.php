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

namespace Kreta\SharedKernel\Domain\Model\Identity;

abstract class Id implements BaseId
{
    protected $id;

    protected function __construct(?string $id = null)
    {
        if ($id !== null && !is_scalar($id)) {
            throw new InvalidIdException();
        }
        $this->id = null === $id ? Uuid::generate() : $id;
    }

    public function id() : ?string
    {
        return $this->id;
    }

    public function equals(Id $id) : bool
    {
        return $this->id === $id->id();
    }

    public function __toString() : string
    {
        return (string) $this->id;
    }
}
