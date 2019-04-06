<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\startGame;

const GAME_DESCRITPION = 'Find the greatest common divisor of given numbers';

function getGameData()
{
    $generateData = function () {
        $questionOperandOne = rand(1, 100);
        $questionOperandTwo = rand(1, 100);
        $correctAnswer = getGcd($questionOperandOne, $questionOperandTwo);
        $question = "$questionOperandOne $questionOperandTwo";
        return [$question, $correctAnswer];
    };

    startGame(GAME_DESCRITPION, $generateData);
}

function getGcd($numOne, $numTwo)
{
    $divisor = min($numOne, $numTwo);
    while ($numOne % $divisor !== 0 || $numTwo % $divisor !== 0) {
        $divisor--;
    }
    
    return $divisor;
}
