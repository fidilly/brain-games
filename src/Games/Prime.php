<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\playGame;

const GAME_DESCRITPION = "Answer \"yes\" if given number is prime. Otherwise answer \"no\"";

function getGameData()
{
    $generateData = function () {
        $question = rand(0, 4000);
        $correctAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    playGame(GAME_DESCRITPION, $generateData);
}

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
