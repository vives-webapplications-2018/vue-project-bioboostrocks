<?php

//variables for testing
$deck = array(1,2,3,4,5);
$iteration = 0;
$playerCards = 0;


shuffle($deck);

function drawCard($deck, $iteration)
{
	$drawnCard = $deck[$iteration];
	$iteration++;
	return $drawnCard;	
}

//testing
$playerCards += drawCard($deck, $iteration);
echo $playerCards;


/*
function totalPlayerCards()
{
	$totalCards = 0;
	return $totalCards += drawRandomCard($deck);
}

echo totalPlayerCards();
