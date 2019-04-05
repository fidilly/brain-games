<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\startGame;

const GAME_DESCRITPION = "Answer \"yes\" if number even otherwise answer \"no\"";

function getGameData()
{
    $generateData = function () {
        $question = rand();
        $correctAnswer = ($question % 2 === 0 ? 'yes' : 'no');
        return [$question, $correctAnswer];
    };

    startGame(GAME_DESCRITPION, $generateData);
}
