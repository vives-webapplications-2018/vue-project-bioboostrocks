# Project
Multiplayer Blackjack.

## What?
Team vs Team Blackjack.


## How?
We will make the game int php and javascript, we will use Slim and Vue to help us simplify the game.

## Functionality?
We will have an array with all possible values in it. For the first draw each team will recieve a random number from the array, This number will no be hidden from each other although the next round of cards will be hidden, so each team will have 2 cards at this point of which one is hidden and 1 is visible. Then both teams get to have a choice, "Hit" or "Stand". If you hit, you will recieve another card. If you hold, you won't get another card and you will compare your numbers with the numbers from your opponent. The goal is to have the highest possible number under 22. 

## Possibilities

- You both have 21's and it's a tie. The round ends as a draw, noone gets points and a new round starts.

- After both teams have choosen "Stand" the round ends and we combine all the numbers each team has. the one with the highest number but still under 22 wins.

- Both teams have a total number above 21 wich results into a draw, the game ends and noone gets points.

## Teams:
When you enter a game, you can manually join a team, you will see how many people are already in the team. Once the start button has been pressed it is not longer possible to join a team because the game will start. As a member of the team you will have the choice to vote for 1 of 2 posibilities. Either you vote for "Hit" or you vote for "Stand". You will have 30 seconds to press 1 of the 2 buttons. After the time limit has passed or everyone has voted, the option with the most votes will be executed.

## Problems:

- The card "1" has two meanings in Blackjack. The "1" can stand for a value of 1 or 11. We will solve this to always let the number "1" be a value of 11 until the combined values of the numbers become higher then 21, if this happens the number "1" will have a value of 1. 

- What if you draw two times the number "1"? If this is the case, the first number 1 card will have the value 11 and the next number 1 card will recieve the value 1 otherwise the total value of the numbers will exceed the value 21.

- If all the players on the same team has voted equally, so the votes are 50%-50% for "Stand" and "Hit". The outcome will be random or it will always be 1 of the 2 each time (fixed outcome with 50%, for example it will always be "Hit").
