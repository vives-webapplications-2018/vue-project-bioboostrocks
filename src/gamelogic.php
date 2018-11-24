<?php

//variables for testing
$redCards = array();
$blueCards = array();

$cardNumbers = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13');
$cardColors = array('spade', 'heart', 'diamond', 'club');

$shuffledDeck = shuffleCards($cardColors, $cardNumbers);
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


