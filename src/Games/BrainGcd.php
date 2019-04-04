<?php

namespace BrainGames\Games\BrainGcd;

use function BrainGames\Engine\logic;

const GAME_DESCRITPION = 'Find the greatest common divisor of given numbers';

function data()
{
    $generator = function () {
        $questionOperandOne = rand(1, 100);
        $questionOperandTwo = rand(1, 100);
        $divisor = min($questionOperandOne, $questionOperandTwo);
        while ($questionOperandOne % $divisor !== 0 || $questionOperandTwo % $divisor !== 0) {
            $divisor--;
        }
        
        return ["$questionOperandOne $questionOperandTwo", $divisor];
    };

    logic(GAME_DESCRITPION, $generator);
}
