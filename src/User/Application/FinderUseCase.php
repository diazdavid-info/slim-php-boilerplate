<?php

namespace App\User\Application;

use App\User\Domain\User;
use App\User\Domain\UserRepository;
use App\User\Domain\ValueObject\UserId;

class FinderUseCase
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(string $id): User
    {
        return $this->repository->find(new UserId($id));
    }
}