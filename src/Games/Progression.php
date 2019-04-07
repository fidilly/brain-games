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
        $progression = [];

        for ($i = 0; $i < PROGRESSION_LENGTH; $i++) {
            $progression[] = $startValue + $stepValue * $i;
        }

        $indexToHide = array_rand($progression);
        $correctAnswer = $progression[$indexToHide];
        $progression[$indexToHide] = "..";
        $question = implode(" ", $progression);
        
        return [$question, $correctAnswer];
    };

    playGame(GAME_DESCRITPION, $generateData);
}
