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

$app->get('/teams/cards', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/cards' route");
    $array = array(
        "redCards" => array(
            file_get_contents("cards/club/club01.html.base64"),
            file_get_contents("cards/heart/heart05.html.base64"),
            file_get_contents("cards/spade/spade08.html.base64"),
            file_get_contents("cards/club/club10.html.base64"),
            file_get_contents("cards/diamond/diamond12.html.base64")
        ),
        "blueCards" => array(
            file_get_contents("cards/club/club01.html.base64"),
            file_get_contents("cards/heart/heart05.html.base64"),
            file_get_contents("cards/spade/spade08.html.base64"),
            file_get_contents("cards/diamond/diamond01.html.base64"),
            file_get_contents("cards/spade/spade13.html.base64")
        )
    );
    return json_encode($array);
});

$app->get('/teams/{team}', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams' route");
    return $this->renderer->render($response, 'teams.phtml', $args);
});

$app->get('/teams/{team}/hit', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams' route");
    return $this->renderer->render($response, 'teams.phtml', $args);
});

$app->get('/teams/{team}/stand', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams' route");
    return $this->renderer->render($response, 'teams.phtml', $args);
});
