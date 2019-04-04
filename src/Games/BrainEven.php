<?php

namespace BrainGames\Games\BrainEven;

use function BrainGames\Engine\logic;

const GAME_DESCRITPION = "Answer \"yes\" if number even otherwise answer \"no\"";

function data()
{
    $generator = function () {
        $question = rand();
        return [$question, $question % 2 === 0 ? 'yes' : 'no'];
    };

    logic(GAME_DESCRITPION, $generator);
}
