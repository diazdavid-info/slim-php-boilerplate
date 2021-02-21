<?php

namespace App\User\Infrastructure\Dbal;

use App\User\Domain\User;
use App\User\Domain\UserRepository;
use App\User\Domain\ValueObject\UserCreatedDate;
use App\User\Domain\ValueObject\UserId;
use App\User\Domain\ValueObject\UserName;
use DateTimeImmutable;

class DbalUserRepository implements UserRepository
{
    public function find(UserId $id): User
    {
        return new User(new UserId($id), new UserName('David'), new UserCreatedDate(new DateTimeImmutable()));
    }
}