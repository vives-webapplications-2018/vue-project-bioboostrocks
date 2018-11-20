<?php

use Slim\Http\Request;
use Slim\Http\Response;
include "gamelogic.php";

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

$app->get('/teams/cards', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/cards' route");
    $array = array(
        "redCards" => array(
            getCardBase64("diamond", "12"),
            getCardBase64("diamond", "12")
        ),
        "blueCards" => array(
            getCardBase64("diamond", "12"),
            getCardBase64("diamond", "11")
        )
    );
    return json_encode($array);
});

$app->get('/teams/{team}', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams/$team' route");
    return $this->renderer->render($response, 'teams.phtml', $args);
});

$app->get('/teams/{team}/hit', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams/$team/stand' route");
    return $this->renderer->render($response, 'teams.phtml', $args);
});

$app->get('/teams/{team}/stand', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams/$team/stand' route");
    return $this->renderer->render($response, 'teams.phtml', $args);
});
