<?php

namespace Api\controllers;

use App\User\Application\FinderUseCase;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class GetUserController
{
    private FinderUseCase $useCase;

    public function __construct(FinderUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $id = $args['id'];
        $this->useCase->execute($id);
        $response->getBody()->write('Hello world! ' . $id);

        return $response;
    }
}