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
        $progressionNumbers[] = $startValue;

        for ($i = 1; $i < PROGRESSION_LENGTH; $i++) {
            $progressionNumbers[] = $startValue + $stepValue * $i;
        }

        $indexToHide = array_rand($progressionNumbers);
        $correctAnswer = $progressionNumbers[$indexToHide];
        $progressionNumbers[$indexToHide] = HIDESIGN;
        $question = implode(" ", $progressionNumbers);
        
        return [$question, $correctAnswer];
    };

    startGame(GAME_DESCRITPION, $generateData);
}
