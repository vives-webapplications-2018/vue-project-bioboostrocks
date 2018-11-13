<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/' route");
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/playerCount', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/playerCount' route");
    $array = array(
            "redPlayers" => 20,
            "bluePlayers" => 40
        );
    return json_encode($array);
});

$app->get('/teams/{team}', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams' route");
    return $this->renderer->render($response, 'teams.phtml', $args);
});
