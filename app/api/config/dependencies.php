<?php

use Api\controllers\GetHomeController;
use Api\controllers\GetUserController;
use App\User\Application\FinderUseCase;
use App\User\Domain\UserRepository;
use App\User\Infrastructure\Dbal\DbalUserRepository;
use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;

return static function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        GetHomeController::class => function () {
            return new GetHomeController();
        },
    ]);
    $containerBuilder->addDefinitions([
        GetUserController::class => function (ContainerInterface $c) {
            $useCase = $c->get(FinderUseCase::class);

            return new GetUserController($useCase);
        },
    ]);
    $containerBuilder->addDefinitions([
        FinderUseCase::class => function (ContainerInterface $c) {
            $repository = $c->get(UserRepository::class);

            return new FinderUseCase($repository);
        },
    ]);
    $containerBuilder->addDefinitions([
        UserRepository::class => function () {
            return new DbalUserRepository();
        },
    ]);
};
