<?php

//variables for testing
$playerCards = 0;

$cardNumbers = array('Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King');
$cardColors = array('Spade', 'Hearts', 'Diamonds', 'Clubs');

$shuffledDeck = shuffleCards($cardColors, $cardNumbers);

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




function getCardBase64($symbol, $number)
{
    $base64 = file_get_contents("cards/$symbol/$symbol$number.html.base64");
    return str_replace("\n", "", $base64);
}
