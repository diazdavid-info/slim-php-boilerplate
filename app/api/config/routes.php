<?php

use Api\controllers\GetHomeController;
use Api\controllers\GetUserController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

return static function (App $app) {
    $container = $app->getContainer();
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', $container->get(GetHomeController::class));

    $app->get('/users/{id}', $container->get(GetUserController::class));
};