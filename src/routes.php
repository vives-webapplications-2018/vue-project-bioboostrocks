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
    if (!file_exists("state/cards.json")) {
        $this->logger->info("Create cards array");
        $cards = array(
            "redCards" => array(
                getCardBase64("club", "11"),
                getCardBase64("diamond", "7")
            ),
            "blueCards" => array(
                getCardBase64("club", "2"),
                getCardBase64("spade", "5")
            )
        );
        file_put_contents("state/cards.json", json_encode($cards));
    }
    return file_get_contents("state/cards.json");
});

$app->get('/teams/reset', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/teams/reset' route");
    //Delete state from filesytem
    unlink("state/cards.json");
});

$app->get('/teams/{team}', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams/$team' route");
    return $this->renderer->render($response, 'teams.phtml', $args);
});



$app->get('/teams/{team}/stand', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams/$team/stand' route");
});

$app->get('/teams/{team}/hit', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams/$team/hit' route");

    //Set assoc true for array
    $cards = json_decode(file_get_contents("state/cards.json"), true);
    array_push($cards[$team . "Cards"], getCardBase64("spade", "1"));
    file_put_contents("state/cards.json", json_encode($cards));
    
    return json_encode($cards);
});
