<?php

function shuffleCards()
{
    $cardNumbers = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13');
    $cardColors = array('spade', 'heart', 'diamond', 'club');

    $deck = array();
	foreach($cardColors as $cardColor)
	{
		foreach($cardNumbers as $cardNumber)
			array_push($deck, $cardColor . $cardNumber);
	}
	shuffle($deck);
	return $deck;
}

function newGame() {
	$deck = shuffleCards();
    $cards = array(
        "redCards" => array(
            hitCard($deck, "red"),
            hitCard($deck, "red")
        ),
        "blueCards" => array(
            hitCard($deck, "blue"),
            hitCard($deck, "blue")
        )
    );
    saveDeck($deck);
    saveCards($cards);
}

function resetCards() {
    unlink("state/cards.json");
	unlink("state/red-ace.txt");
	unlink("state/blue-ace.txt");
}

function resetDeck() {
    unlink("state/cards.json");
    unlink("state/deck.json");
    unlink("state/stats.json");
	unlink("state/red-ace.txt");
	unlink("state/blue-ace.txt");
}

function hitCard(&$shuffledDeck, string $team)
{
	$drawnCard = array_pop($shuffledDeck);
    $stats = readStats();
    $value = preg_replace("/[^0-9\.]/", '', $drawnCard);

    if ($stats[$team]["stand"] == 0) {
  	    if ($value == 1 && (file_exists("state/$team-ace.txt") == false)) {
            $stats[$team]["sum"] += 11;
	    	saveAces($team);
        } else {
            $stats[$team]["sum"] += min(10, $value);
        } 

        if ($stats[$team]["sum"] >= 21) {
            $stats[$team]["stand"] = 1;
        }
    }
	
    saveStats($stats);

	return $drawnCard;
}

function getCardBase64($card)
{
	$number = preg_replace("/[^0-9\.]/", '', $card);
	$symbol = preg_replace('/[0-9]+/', '', $card);

    $base64 = file_get_contents("cards/$symbol/$symbol$number.html.base64");
    return str_replace("\n", "", $base64);
}

function getCardsBase64($cards) {
    $base64 = array(
        "redCards" => array(),
        "blueCards" => array()
    );
    foreach($cards["redCards"] as $card) {
        array_push($base64["redCards"], getCardBase64($card));
    }
    foreach($cards["blueCards"] as $card) {
        array_push($base64["blueCards"], getCardBase64($card));
    }
    return json_encode($base64);
}

function saveAces($team) {
	file_put_contents("state/$team-ace.txt", "ace present");
}

function saveDeck($deck) {
    file_put_contents("state/deck.json", json_encode($deck));
}

function saveCards($cards) {
    file_put_contents("state/cards.json", json_encode($cards));
}

function saveStats($stats) {
    file_put_contents("state/stats.json", json_encode($stats));
}

function readDeck() {
    return json_decode(file_get_contents("state/deck.json"), true);
}

function readCards() {
    return json_decode(file_get_contents("state/cards.json"), true);
}

function readStats() {
    return json_decode(file_get_contents("state/stats.json"), true);
}
