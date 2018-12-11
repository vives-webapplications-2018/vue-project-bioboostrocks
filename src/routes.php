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
    resetDeck();
});

$app->get('/teams/stats', function (Request $request, Response $response, array $args) {
    $this->logger->info("Get '/teams/stats' route");
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

    createStats();
    $stats = readStats();
    $stats[$team]["stand"] = 1;

    if ($stats["red"]["stand"] == 1 && $stats["blue"]["stand"] == 1) {
        if ($stats["red"]["sum"] <= 21 && $stats["blue"] <= 21) {
            if ($stats["red"]["sum"] > $stats["blue"]["sum"])  {
                $stats["red"]["score"] += getCardsTotal();
            } else if ($stats["blue"]["sum"] > $stats["red"]["sum"])  {
                $stats["blue"]["score"] += getCardsTotal();
            } else {
                $total = getCardsTotal();
                $stats["red"]["score"] += $total; 
                $stats["blue"]["score"] += $total; 
            }
        }

        if ($stats["red"]["sum"] <= 21 && $stats["blue"] > 21) {
            $stats["red"]["score"] += getCardsTotal(); 
        }

        if ($stats["blue"]["sum"] <= 21 && $stats["red"] > 21) {
            $stats["blue"]["score"] += getCardsTotal(); 
        }

        $stats["red"]["sum"] = 0;
        $stats["blue"]["sum"] = 0;
        $stats["red"]["stand"] = 0;
        $stats["blue"]["stand"] = 0;
        $stats["gameId"]++;
        resetCards();
    }
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
