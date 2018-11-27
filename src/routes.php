<?php

use Slim\Http\Request;
use Slim\Http\Response;
include "gamelogic.php";

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/' route");
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/teams/cards', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/cards' route");
    if (!file_exists("state/cards.json")) {
        $this->logger->info("Create cards array");
        newGame();
    }
    return getCardsBase64(json_decode(readCards(), true));
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
    $cards = json_decode(readCards(), true);
    $deck = json_decode(readDeck(), true);
    array_push($cards[$team . "Cards"], hitCard($deck));

    saveCards($cards);
    saveDeck($deck);
    
    return json_encode($cards);
});
