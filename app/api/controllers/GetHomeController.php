<?php

namespace Api\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class GetHomeController
{
    public function __invoke(Request $request, Response $response): Response
    {
        $response->getBody()->write('Hello world!');

        return $response;
    }
}