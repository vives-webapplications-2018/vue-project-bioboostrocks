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
            hitCard($deck),
            hitCard($deck)
        ),
        "blueCards" => array(
            hitCard($deck),
            hitCard($deck)
        )
    );
    saveDeck($deck);
    saveCards($cards);
}

function hitCard(&$shuffledDeck)
{
	$drawnCard = array_pop($shuffledDeck);
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

function saveDeck($deck) {
    file_put_contents("state/deck.json", json_encode($deck));
}

function saveCards($cards) {
    file_put_contents("state/cards.json", json_encode($cards));
}

function readDeck() {
    return file_get_contents("state/deck.json");
}

function readCards() {
    return file_get_contents("state/cards.json");
}
