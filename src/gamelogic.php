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




