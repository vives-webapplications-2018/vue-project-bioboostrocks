<?php

//variables for testing
$playerCards = 0;

$cardNumbers = array('Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King');
$cardColors = array('Spade', 'Hearts', 'Diamonds', 'Clubs');
$deck = array();

foreach($cardColors as $cardColor)
{
	foreach($cardNumbers as $cardNumber)
	{
		$deck[] = $cardColor . $cardNumber;
	}
}

shuffle($deck);
var_dump($deck);

