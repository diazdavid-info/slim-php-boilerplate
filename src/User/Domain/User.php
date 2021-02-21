<?php

namespace App\User\Domain;

use App\User\Domain\ValueObject\UserCreatedDate;
use App\User\Domain\ValueObject\UserId;
use App\User\Domain\ValueObject\UserName;

class User
{
    private UserId $id;
    private UserName $name;
    private UserCreatedDate $createdDate;

    public function __construct(UserId $id, UserName $name, UserCreatedDate $createdDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->createdDate = $createdDate;
    }

    public static function create(UserId $id, UserName $userName): User
    {
        return new self($id, $userName, UserCreatedDate::now());
    }

    public function getId(): UserId
    {
        return $this->id;
    }

    public function getName(): UserName
    {
        return $this->name;
    }

    public function getCreatedDate(): UserCreatedDate
    {
        return $this->createdDate;
    }
}