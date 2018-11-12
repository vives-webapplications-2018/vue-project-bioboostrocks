<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/' route");
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/teams/{team}', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams' route");
    return $this->renderer->render($response, 'teams.phtml', $args);
});
