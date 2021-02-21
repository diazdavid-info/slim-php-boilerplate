<?php

namespace App\User\Domain\ValueObject;

use App\Shared\Domain\ValueObject\DateValueObject;
use DateTimeImmutable;

class UserCreatedDate extends DateValueObject
{
    public static function now(): UserCreatedDate
    {
        return new self(new DateTimeImmutable());
    }
}