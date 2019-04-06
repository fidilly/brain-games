<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\playGame;

const GAME_DESCRITPION = "Answer \"yes\" if number even otherwise answer \"no\"";

function getGameData()
{
    $generateData = function () {
        $question = rand();
        $correctAnswer = isEven($question);
        return [$question, $correctAnswer];
    };

    playGame(GAME_DESCRITPION, $generateData);
}

function isEven($number)
{
     return $number % 2 === 0 ? 'yes' : 'no';
}
