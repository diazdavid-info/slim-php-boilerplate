<?php

namespace App\Shared\Domain\ValueObject;

use DateTimeImmutable;
use function App\Shared\date_to_string;

abstract class DateValueObject
{
    protected DateTimeImmutable $value;

    public function __construct(DateTimeImmutable $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value();
    }

    public function value(): ?string
    {
        return date_to_string($this->value);
    }
}