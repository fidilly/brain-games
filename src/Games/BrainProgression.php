<?php

namespace BrainGames\Games\BrainProgression;

use function BrainGames\Engine\logic;

const GAME_DESCRITPION = 'What number is missing in the progression?';
const PROGRESSION_LENGTH = 10;

function data()
{
    $generator = function () {
        $hideSign = "..";
        $startProgressionValue = rand(1, 10);
        $stepProgressionValue = rand(1, 10);
        $progression[] = $startProgressionValue;

        for ($step = 1; $step < PROGRESSION_LENGTH; $step++) {
            $progression[] = $progression[(count($progression) - 1)] + $stepProgressionValue;
        }
        $toHide = rand(0, count($progression) - 1);
        $soughtValue = $progression[$toHide];
        $progression[$toHide] = $hideSign;
        
        return [implode(" ", $progression), $soughtValue];
    };

    logic(GAME_DESCRITPION, $generator);
}
