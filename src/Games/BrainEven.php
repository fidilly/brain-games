<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\startGame;

const GAME_DESCRITPION = "Answer \"yes\" if number even otherwise answer \"no\"";

function getGameData()
{
    $generator = function () {
        $question = rand();
        return [$question, $question % 2 === 0 ? 'yes' : 'no'];
    };

    startGame(GAME_DESCRITPION, $generator);
}
