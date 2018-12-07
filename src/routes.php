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
    return getCardsBase64(readCards());
});

$app->get('/teams/reset', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/teams/reset' route");
    //Delete state from filesytem
    unlink("state/cards.json");
    unlink("state/deck.json");
    unlink("state/stats.json");
	unlink("state/red.txt");
	unlink("state/blue.txt");
});

$app->get('/teams/stats', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/teams/stats' route");
    if (!file_exists("state/cards.json")) {
        $stats = array(
            "red" => array(
                "score" => 0,
                "sum" => 0,
                "stand" => 0
            ),
            "blue" => array(
                "score" => 0,
                "sum" => 0,
                "stand" => 0
            )
        );
        saveStats($stats);
    }
    $stats = readStats();
    $stats["red"]["sum"] = 0;
    $stats["blue"]["sum"] = 0;
    return json_encode($stats);
});


$app->get('/teams/{team}', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams/$team' route");
    return $this->renderer->render($response, 'teams.phtml', $args);
});

$app->get('/teams/{team}/stand', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams/$team/stand' route");

    $stats = readStats();
    $stats[$team]["stand"] = 1;
    saveStats($stats);
    return;
});

$app->get('/teams/{team}/hit', function (Request $request, Response $response, array $args) {
    $team = $request->getAttribute('team');
    $this->logger->info("Get '/teams/$team/hit' route");

    //Set assoc true for array
    $cards = readCards();
    $deck = readDeck();
    array_push($cards[$team . "Cards"], hitCard($deck, $team));

    saveCards($cards);
    saveDeck($deck);
    
    return;
});
