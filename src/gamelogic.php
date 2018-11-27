<?php

//variables for testing
$redCards = array();
$blueCards = array();

$cardNumbers = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13');
$cardColors = array('spade', 'heart', 'diamond', 'club');

$newCard = hitCard($shuffledDeck);

function shuffleCards($cardColors, $cardNumbers)
{
	foreach($cardColors as $cardColor)
	{
		foreach($cardNumbers as $cardNumber)
			$deck[] = $cardColor . $cardNumber;
	}
	shuffle($deck);
	return $deck;
}

newGame() {
    $deck = shuffleCards($cardColors, $cardNumbers);
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

function getCardBase64($newCard)
{
	$number = preg_replace("/[^0-9\.]/", '', $newCard);
	$symbol = preg_replace('/[0-9]+/', '', $newCard);

    $base64 = file_get_contents("cards/$symbol/$symbol$number.html.base64");
    return str_replace("\n", "", $base64);
}

function saveDeck($deck) {
    file_put_contents("state/deck.json", json_encode($deck));
}

function saveCards($cards) {
    file_put_contents("state/cards.json", json_encode($cards));
}

function readDeck() {
    file_get_contents("state/deck.json");
}

function readCards() {
    file_get_contents("state/cards.json");
}
