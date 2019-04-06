<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\playGame;

const GAME_DESCRITPION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function getGameData()
{
    $generateData = function () {
        $startValue = rand(1, 10);
        $stepValue = rand(1, 10);

        for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
            $progressionNumbers[] = $startValue + $stepValue * $i;
        }

        $indexToHide = array_rand($progressionNumbers);
        $correctAnswer = $progressionNumbers[$indexToHide];
        $progressionNumbers[$indexToHide] = "..";
        $question = implode(" ", $progressionNumbers);
        
        return [$question, $correctAnswer];
    };

    playGame(GAME_DESCRITPION, $generateData);
}
