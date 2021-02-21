<?php

namespace App\User\Domain;

use App\User\Domain\ValueObject\UserId;

interface UserRepository
{
    public function find(UserId $id): User;
}