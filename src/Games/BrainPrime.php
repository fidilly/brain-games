<?php

namespace BrainGames\Games\BrainPrime;

use function BrainGames\Engine\startGame;
use function BrainGames\IsPrime\isPrime;

const GAME_DESCRITPION = "Answer \"yes\" if given number is prime. Otherwise answer \"no\n";

function getGameData()
{
    $generator = function () {
        $question = rand(0, 4000);
        $correctAnswer = (isPrime($question) ? 'yes' : 'no');
        return [$question, $correctAnswer];
    };

    startGame(GAME_DESCRITPION, $generator);
}
