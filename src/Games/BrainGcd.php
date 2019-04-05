<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Engine\startGame;

const GAME_DESCRITPION = 'Find the greatest common divisor of given numbers';

function getGameData()
{
    $generator = function () {
        $questionOperandOne = rand(1, 100);
        $questionOperandTwo = rand(1, 100);
        $correctAnswer = getGcd($questionOperandOne, $questionOperandTwo);
        return ["$questionOperandOne $questionOperandTwo", $correctAnswer];
    };

    startGame(GAME_DESCRITPION, $generator);
}

function getGcd($numOne, $numTwo)
{
    $divisor = min($numOne, $numTwo);
    while ($numOne % $divisor !== 0 || $numTwo % $divisor !== 0) {
        $divisor--;
    }
    
    return $divisor;
}
