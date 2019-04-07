<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\playGame;

const GAME_DESCRITPION = 'Find the greatest common divisor of given numbers';

function getGameData()
{
    $generateData = function () {
        $operandOne = rand(1, 100);
        $operandTwo = rand(1, 100);
        $correctAnswer = getGcd($operandOne, $operandTwo);
        $question = "$operandOne $operandTwo";
        return [$question, $correctAnswer];
    };

    playGame(GAME_DESCRITPION, $generateData);
}

function getGcd($numOne, $numTwo)
{
    $divisor = min($numOne, $numTwo);
    while ($numOne % $divisor !== 0 || $numTwo % $divisor !== 0) {
        $divisor--;
    }
    
    return $divisor;
}
