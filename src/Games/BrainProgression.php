<?php

namespace BrainGames\Games\BrainProgression;

use function BrainGames\Engine\startGame;

const GAME_DESCRITPION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function getGameData()
{
    $generator = function () {
        $hideSign = "..";
        $startValue = rand(1, 10);
        $stepValue = rand(1, 10);
        $progression[] = $startValue;

        for ($i = 1; $i < PROGRESSION_LENGTH; $i++) {
            $progression[] = $progression[(count($progression) - 1)] + $stepValue;
        }
        $toHide = rand(0, count($progression) - 1);
        $correctAnswer = $progression[$toHide];
        $progression[$toHide] = $hideSign;
        $question = implode(" ", $progression);
        
        return [$question, $correctAnswer];
    };

    startGame(GAME_DESCRITPION, $generator);
}
