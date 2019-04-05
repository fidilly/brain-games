<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Engine\logic;
use function BrainGames\Gcd\getGcd;

const GAME_DESCRITPION = 'Find the greatest common divisor of given numbers';

function data()
{
    $generator = function () {
        $questionOperandOne = rand(1, 100);
        $questionOperandTwo = rand(1, 100);
        $correctAnswer = getGcd($questionOperandOne, $questionOperandTwo);
        return ["$questionOperandOne $questionOperandTwo", $correctAnswer];
    };

    logic(GAME_DESCRITPION, $generator);
}
