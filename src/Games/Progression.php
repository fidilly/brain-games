<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\startGame;

const GAME_DESCRITPION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;
const HIDESIGN = "..";

function getGameData()
{
    $generateData = function () {
        $startValue = rand(1, 10);
        $stepValue = rand(1, 10);
        $progression[] = $startValue;

        for ($i = 1; $i < PROGRESSION_LENGTH; $i++) {
            $progression[] = $startValue + $stepValue * $i;
        }

        $indexToHide = array_rand($progression);
        $correctAnswer = $progression[$indexToHide];
        $progression[$indexToHide] = HIDESIGN;
        $question = implode(" ", $progression);
        
        return [$question, $correctAnswer];
    };

    startGame(GAME_DESCRITPION, $generateData);
}
