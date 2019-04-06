<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\startGame;

const GAME_DESCRITPION = "Answer \"yes\" if number even otherwise answer \"no\"";

function getGameData()
{
    $generateData = function () {
        $question = rand();
         $isEven = function ($number) {
            return $number % 2 === 0 ? 'yes' : 'no';
        };
        $correctAnswer = $isEven($question);
        return [$question, $correctAnswer];
    };

    startGame(GAME_DESCRITPION, $generateData);
}
